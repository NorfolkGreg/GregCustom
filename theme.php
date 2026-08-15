<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="<?= $Wcms->getSiteLanguage() ?>">
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
	<link href="https://fonts.googleapis.com/css?family=Boogaloo|McLaren" rel="stylesheet">
	<meta property="og:title" content="<?= $Wcms->page('title') ?>" >

	<!-- Website and page title -->
	<title>
		<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>
	</title>

	<!-- Admin CSS -->
	<?= $Wcms->css() ?>
	<!-- Theme CSS -->
	<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
</head>

<body onload="check()">
	<div id="wrapper">

	<!-- Admin settings panel and alerts -->
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>

	<header>
		<h1><em><?= $Wcms->get('config', 'siteTitle') ?></em><br>
			<?= $Wcms->page('title') ?>

		</h1>
		<h2><?= $Wcms->page('description') ?></h2>
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
				<!-- Custom Click Menu -->
				<?= customClickMenu() ?>

			</ul>
		</nav>
	</div>
	</section>

	<section class="main">
		<?= $Wcms->page('content') ?>
	</section>

	<footer>
		<?= $Wcms->footer() ?>
	</footer>
	</div>

	<!-- Admin JavaScript. More JS libraries can be added below -->
	<?= $Wcms->js() ?>

</body>
</html>