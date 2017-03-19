
<?php

	define('LOCALHOST', $_SERVER['REMOTE_ADDR'] == 'localhost' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1');

	if (!LOCALHOST) {
		require_once('redirect.php');
	}

	$error404 = false;
	if (isset($_GET['route'])) {
		$error404 = true;
	}

	$base = '/';
	if (LOCALHOST && $error404) {
		$base = '../';
	} else if (LOCALHOST) {
		$base = '';
	}

	$pages = array(
		'index' => 'works.php',
		'works' => 'works.php',
		'contact' => 'contact.php',
		'lacnevozenie' => '/works/lacnevozenie.php',
		'cnma' => '/works/cnma.php',
		'personal-branding' => '/works/personal-branding.php',
		'logos-2016' => '/works/logos-2016.php',
		'bazos' => '/works/bazos.php',
	);

	$url = trim(@$_GET['route'], '/');

	if (empty($url)) {
		$url = 'index';
	}

?><!DOCTYPE html>
<html lang="sk">

	<?php include('views/common/head.php') ?>

	<body class="">

		<?php include('views/common/header.php') ?>

		<div class="content-wrapper">

			<div class="body-content">

				<?php
					if (!isset($pages[$url])) {
						include('views/error/404.php');
					} else if (!file_exists('views/'.$pages[$url])) {
						include('views/error/404.php');
					} else {
						include('views/'.$pages[$url]);
					}
				?>

			</div> <!-- BODY-CONTENT END -->

			<div class="lines-overlay">
				<span class="line line-1"></span>
				<span class="line line-2"></span>
				<span class="line line-3"></span>
				<span class="line line-4"></span>
				<span class="line line-5"></span>
			</div> <!-- LINES OVERLAY END -->

		</div> <!-- CONTENT WRAPPER END -->

		<?php include('views/common/footer.php') ?>

	</body>
</html>
