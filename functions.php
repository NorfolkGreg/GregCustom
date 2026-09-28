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

/**
 * Custom WonderCMS search
 * Searches visible menu LINK pages, including nested pages.
 */

function wonderSearchGetMenuLinks($items, $parentPath = '') {
    $links = [];

    foreach ($items as $item) {
        if (is_array($item)) {
            $item = (object)$item;
        }

        $slug = trim($item->slug ?? '', '/');

        if ($slug === '') {
            continue;
        }

        $currentPath = $parentPath === ''
            ? $slug
            : $parentPath . '/' . $slug;

        $subpages = [];

        if (!empty($item->subpages)) {
            $subpages = is_object($item->subpages)
                ? get_object_vars($item->subpages)
                : (array)$item->subpages;
        }

        $visibleSubpages = array_filter(
            $subpages,
            function ($subpage) {
                $subpage = is_array($subpage)
                    ? (object)$subpage
                    : $subpage;

                return !isset($subpage->visibility)
                    || $subpage->visibility !== 'hide';
            }
        );

        if (empty($visibleSubpages)) {
            $links[] = $currentPath;
        }

        if (!empty($subpages)) {
            $links = array_merge(
                $links,
                wonderSearchGetMenuLinks($subpages, $currentPath)
            );
        }
    }

    return $links;
}


function wonderSearchGetPageByPath($pages, $path) {
    $parts = explode('/', $path);
    $current = $pages;

    foreach ($parts as $index => $part) {
        if ($index === 0) {
            if (!isset($current->{$part})) {
                return null;
            }

            $current = $current->{$part};
        } else {
            if (!isset($current->subpages->{$part})) {
                return null;
            }

            $current = $current->subpages->{$part};
        }
    }

    return $current;
}


function wonderSearchCleanTitle($title) {
    return html_entity_decode(
        $title,
        ENT_QUOTES | ENT_HTML5,
        'UTF-8'
    );
}


function wonderSearch() {
    global $Wcms;

    $query = trim($_GET['q'] ?? '');

    $searchUrl = $Wcms->url('search');

    $output = '
    <div class="wondersearch-container">
        <form method="get" action="' . htmlspecialchars(
            $searchUrl,
            ENT_QUOTES,
            'UTF-8'
        ) . '">
            <input
                type="search"
                name="q"
                class="wondersearch-input"
                placeholder="Search..."
                aria-label="Search"
                value="' . htmlspecialchars(
                    $query,
                    ENT_QUOTES,
                    'UTF-8'
                ) . '"
            >
            <button type="submit">Search</button>
        </form>
        <div class="wondersearch-results">';

    if ($query === '') {
        $output .= '</div></div>';
        return $output;
    }

    $menuConfig = $Wcms->get('config', 'menuItems');

    $menuItems = is_object($menuConfig)
        ? get_object_vars($menuConfig)
        : (array)$menuConfig;


    $menuLinks = wonderSearchGetMenuLinks($menuItems);
    $pages = $Wcms->get('pages');

    // Read the list of page slugs excluded from search.
    $excludeFile = $Wcms->filesPath . '/searchexclude.txt';

    $excludedSlugs = [];

    if (is_readable($excludeFile)) {
        $excludedSlugs = file(
            $excludeFile,
            FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
        );

        $excludedSlugs = array_map('trim', $excludedSlugs);
    }


    foreach ($menuLinks as $path) {

        // Skip the search and 404 pages.
        if ($path === 'search' || $path === '404') {
            continue;
        }

        // Compare the final page slug against the exclusion list.
        $slug = substr(
            $path,
            strrpos($path, '/') === false
                ? 0
                : strrpos($path, '/') + 1
        );

        if (in_array($slug, $excludedSlugs, true)) {
            continue;
        }

        $page = wonderSearchGetPageByPath($pages, $path);


        if (!$page) {
            continue;
        }

        $title = $page->title ?? '';
        $content = $page->content ?? '';

        $plainContent = html_entity_decode(
            strip_tags($content),
            ENT_QUOTES | ENT_HTML5,
            'UTF-8'
        );

        $titleMatch = stripos($title, $query) !== false;
        $contentMatch = stripos($plainContent, $query) !== false;

        if (!$titleMatch && !$contentMatch) {
            continue;
        }

        $matchPosition = stripos($plainContent, $query);

        if ($matchPosition !== false) {
            $start = max(0, $matchPosition - 20);
            $excerpt = substr($plainContent, $start, 100);

            if ($start > 0) {
                $excerpt = '...' . $excerpt;
            }
        } else {
            $excerpt = substr($plainContent, 0, 100);
        }

        $url = $Wcms->url($path);

        $cleanTitle = wonderSearchCleanTitle($title);

        $safeTitle = htmlspecialchars(
            $cleanTitle,
            ENT_QUOTES,
            'UTF-8'
        );

        $safeExcerpt = htmlspecialchars(
            $excerpt,
            ENT_QUOTES,
            'UTF-8'
        );

        $safeQuery = htmlspecialchars(
            $query,
            ENT_QUOTES,
            'UTF-8'
        );

        $highlightedExcerpt = preg_replace(
            '/(' . preg_quote($safeQuery, '/') . ')/i',
            '<span style="background-color: yellow">$1</span>',
            $safeExcerpt
        );

        $output .= '
            <div class="wondersearch-item">
                <a href="' . htmlspecialchars(
                    $url,
                    ENT_QUOTES,
                    'UTF-8'
                ) . '">' . $safeTitle . '</a>
                <p>' . $highlightedExcerpt . '</p>
            </div>';
    }

    $output .= '</div></div>';

    return $output;
}
