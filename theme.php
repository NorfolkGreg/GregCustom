<?php global $Wcms ?>

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
		// Touch: the first tap on a menu item with subpages opens them (and closes its siblings), the second tap follows the link.
		// Decided per tap, so touch laptops, Chromebooks and tablets with a trackpad get it too, while a mouse keeps hover.
		// A mouse on a browser without hover (a tablet with a Bluetooth mouse) gets tap mode, since CSS hover cannot open anything there,
		// and so does a mouse in a window of phone width (zoomed or split screen), where only the tapped layout stacks inside the screen
		(function () {
			var canHover = function () {
				return !!window.matchMedia && window.matchMedia('(hover: hover)').matches;
			};
			var touch = !canHover();
			var closeOpen = function (scope) {
				scope.querySelectorAll('.subpage-nav.open').forEach(function (item) {
					item.classList.remove('open');
					item.querySelector('a').setAttribute('aria-expanded', 'false');
				});
			};
			var onPress = function (event) {
				touch = event.pointerType !== 'mouse' || !canHover() || window.matchMedia('(max-width: 736px)').matches;
				if (!event.target.closest('#topMenu')) {
					closeOpen(document);
				}
			};
			document.addEventListener('pointerdown', onPress);
			document.addEventListener('touchstart', onPress);
			document.addEventListener('keydown', function (event) {
				touch = !canHover();
				if (event.key === 'Escape') {
					closeOpen(document);
					if (document.activeElement && document.activeElement.closest('#topMenu')) {
						document.activeElement.blur();
					}
				}
			});
			document.addEventListener('focusout', function (event) {
				var menu = document.getElementById('topMenu');
				if (menu && menu.contains(event.target) && !(event.relatedTarget && menu.contains(event.relatedTarget))) {
					closeOpen(menu);
				}
			});
			document.querySelectorAll('#topMenu .subpage-nav > a').forEach(function (link) {
				if (touch) {
					link.setAttribute('aria-expanded', 'false');
				}
				link.addEventListener('click', function (event) {
					var item = link.parentNode;
					if (touch && !item.classList.contains('open')) {
						event.preventDefault();
						closeOpen(item.parentNode);
						item.classList.add('open');
						link.setAttribute('aria-expanded', 'true');
					}
				});
			});
		})();
	</script>


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