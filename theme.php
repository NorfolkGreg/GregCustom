<?php
global $Wcms;

// A parent page keeps its link; the arrow after it opens its sub-menu without JavaScript
// (a visually hidden checkbox and its label, added to the WonderCMS menu through the renderPageNavMenuItem hook)
$Wcms->addListener('renderPageNavMenuItem', function ($args) {
	if (!empty($args[3])) {
		// The id comes from the full page path, so it is unique and plain ASCII whatever the page names are
		$id = 'sub-' . substr(md5($args[2]), 0, 10);
		// Menu names may already hold entities (&amp;), so they are not escaped a second time
		$name = htmlspecialchars(strip_tags($args[1]->name ?? ''), ENT_QUOTES, 'UTF-8', false);
		$args[0] = preg_replace('#</a>#', '</a><input type="checkbox" id="' . $id . '" class="subpage-toggle" aria-label="' . $name . ' sub-menu"><label for="' . $id . '" class="nav-link subpage-button"></label>', $args[0], 1);
	}
	return $args;
});
?>

<!DOCTYPE html>
<html lang="<?= method_exists($Wcms, 'getSiteLanguage') ? $Wcms->getSiteLanguage() : 'en' ?>">
<head>
	<!-- Encoding, browser compatibility, viewport -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<!-- Search Engine Optimization (SEO) -->
	<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" >
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
	<meta property="og:url" content="<?= $this->url() ?>" >
	<meta property="og:type" content="website" >
	<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" >
	
<!--	<link href="https://fonts.googleapis.com/css?family=Boogaloo|McLaren" rel="stylesheet">  -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=McLaren&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<meta property="og:title" content="<?= $Wcms->page('title') ?>" >

	<!-- Website and page title -->
	<title>
		<?= $Wcms->page('title') ?>
	</title>

	<!-- Admin CSS -->
	<?= $Wcms->css() ?>
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
	<?php if (defined('VERSION') && version_compare(VERSION, '3.5.0', '<')): ?>
	<!-- WonderCMS older than 3.5.0 cannot add the sub-menu arrow, so sub-menus open on hover or focus there -->
	<style>.subpage-nav:hover > .subPageDropdown, .subpage-nav:focus-within > .subPageDropdown { display: block; }</style>
	<?php endif; ?>
</head>

<body>
	<div id="wrapper">

	<!-- Admin settings panel and alerts -->
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>

	<header>
		<h1><em><?= $Wcms->get('config', 'siteTitle') ?></em></h1>
		<h1><?= $Wcms->page('title') ?></h1>
	</header>

	<section id="topMenu">
	<div class="inner">
		<!-- Hidden checkbox control for pure CSS mobile menu -->
		<input id="menuControl" type="checkbox">

		<!-- Animated Hamburger Button -->
		<label for="menuControl" class="hamburger-btn" aria-label="Toggle Menu">
			<span class="bar top-bar"></span>
			<span class="bar middle-bar"></span>
			<span class="bar bottom-bar"></span>
		</label>

		<nav>
			<ul class="menu">
				<?= $Wcms->menu() ?>

			</ul>
		</nav>
	</div>
	</section>

	<section class="main">
		<?= $Wcms->page('content') ?>

		<?php if ($Wcms->currentPage === 'search'): ?>
			<?= method_exists($Wcms, 'search') ? $Wcms->search() : '' ?>
		<?php endif; ?>
	</section>

	<footer>
		<?= $Wcms->footer() ?>
	</footer>
	</div>

	<!-- Admin JavaScript. More JS libraries can be added below -->
	<?= $Wcms->js() ?>


<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('textarea.source').forEach(function (box) {

        box.value = box.value.replace(/\n$/, '');

        function resize() {
            box.style.height = '0';
            box.style.height = (box.scrollHeight + 2) + 'px';
        }

        resize();
    });
});
</script>


</body>
</html>