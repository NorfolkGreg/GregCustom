<?php
/**
 * Custom Menu Function for WonderCMS
 * Ensures parent routes maintain proper pathing and trailing slashes while
 * outputting a button-driven dropdown structure for CSS-only menus.
 */

function customClickMenu($items = null, $depth = 0, $parentPath = '') {
    global $Wcms;

    // Fetch root menu items on initial call
    if ($items === null) {
        $menuConfig = $Wcms->get('config', 'menuItems');
        $items = is_object($menuConfig) ? get_object_vars($menuConfig) : (array)$menuConfig;
    }

    if (empty($items)) {
        return '';
    }

    $output = '';

    foreach ($items as $slug => $item) {
        if (is_array($item)) {
            $item = (object)$item;
        }

        // Skip hidden pages
        if (isset($item->visibility) && $item->visibility === 'hide') {
            continue;
        }

        // Determine current page raw slug and label
        $rawSlug = $item->slug ?? (is_string($slug) ? $slug : '');
        $name    = $item->name ?? $item->title ?? $rawSlug;

        // Clean leading/trailing slashes for clean route assembly
        $cleanRawSlug = trim($rawSlug, '/');
        $cleanParent   = trim($parentPath, '/');

        // Build full hierarchical route path
        if (!empty($cleanParent)) {
            if (strpos($cleanRawSlug, $cleanParent . '/') === 0) {
                $routePath = $cleanRawSlug;
            } else {
                $routePath = $cleanParent . '/' . $cleanRawSlug;
            }
        } else {
            $routePath = $cleanRawSlug;
        }

        // Extract subpages safely
        $subpages = [];
        if (!empty($item->subpages)) {
            $subpages = is_object($item->subpages) ? get_object_vars($item->subpages) : (array)$item->subpages;
        }

        // Filter hidden subpages
        $visibleSubpages = array_filter($subpages, function($sub) {
            $subObj = is_array($sub) ? (object)$sub : $sub;
            return !isset($subObj->visibility) || $subObj->visibility !== 'hide';
        });

        $hasChildren = !empty($visibleSubpages);

        // List of section slugs that require trailing slashes (Parent directory categories)
        $categorySections = ['games', 'wondercms', 'sundry'];

        // Determine trailing slash requirement
        $needsTrailingSlash = $hasChildren || in_array(strtolower($cleanRawSlug), $categorySections);

        // Format final URL path
        $urlPath = $routePath;
        if ($needsTrailingSlash) {
            $urlPath .= '/';
        }

        $url = $Wcms->url($urlPath);

        // Strict active page check
        $isActive = ($Wcms->currentPage === $cleanRawSlug || $Wcms->currentPage === $routePath) ? ' active' : '';

        // Indentation helper for clean, human-readable HTML output
        $indent = str_repeat("    ", $depth + 5);

        // Build <li> class list
        $liClasses = 'nav-item' . ($hasChildren ? ' subpage-nav' : '');
        if (!empty($isActive) && !$hasChildren) {
            $liClasses .= $isActive;
        }

        $output .= "\n" . $indent . '<li class="' . trim($liClasses) . '">';

        if ($hasChildren) {
            // Button-driven dropdown header
            $output .= "\n" . $indent . "    " . '<button type="button" class="nav-link' . $isActive . '">' . htmlspecialchars($name) . '</button>';

            // Sub-menu list using 'subPageDropdown' class
            $output .= "\n" . $indent . "    " . '<ul class="subPageDropdown">';
            $output .= customClickMenu($visibleSubpages, $depth + 1, $routePath);
            $output .= "\n" . $indent . "    " . '</ul>';
        } else {
            // Standard page link
            $output .= "\n" . $indent . "    " . '<a href="' . htmlspecialchars($url) . '" class="nav-link' . $isActive . '">' . htmlspecialchars($name) . '</a>';
        }

        $output .= "\n" . $indent . '</li>';
    }

    return $output;
}