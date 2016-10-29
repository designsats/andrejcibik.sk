<!DOCTYPE html>
<html lang="sk">

	<?php include('views/common/head.php') ?>

	<body>

		<div class="lines-overlay">
			<span class="line line-1"></span>
			<span class="line line-2"></span>
			<span class="line line-3"></span>
			<span class="line line-4"></span>
			<span class="line line-5"></span>
		</div> <!-- LINES OVERLAY END -->

		<a href="#home" class="ajaxlink logo"><img src="assets/images/logo.svg" alt="Andrej Cibík, Designer \& Developer" /></a>

		<nav class="navigation">
			<span class="indicator"></span>

			<div class="menu">
				<a href="#home" class="item ajaxlink ripple active">works</a>
			  <a href="#contact" class="item ajaxlink ripple">about & contact</a>
			</div>

			<div class="social-links">
				<a href="" class="item icon-email" title="Email"></a>
				<a href="" class="item icon-facebook" title="Facebook"></a>
				<a href="" class="item icon-facebook" title="Behnace"></a>
			</div>

		</nav> <!-- NAVIGATION END -->

		<?php include('views/common/header.php') ?>

		<div class="page-bg">
			<div class="mouse-move-el"></div>
		</div>

		<div id="body-content">
			<?php include('views/home.php') ?>
		</div> <!-- BODY-CONTENT END -->

		<?php include('views/common/footer.php') ?>

	</body>
</html>
