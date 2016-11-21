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

		<?php include('views/common/header.php') ?>

		<div class="page-bg">
			<div class="mouse-move-el"></div>
		</div>

		<div class="body-content">
			<?php //include('views/works.php') ?>
			<script type="text/javascript">
				checkURL("#works");
			</script>
		</div> <!-- BODY-CONTENT END -->

		<?php include('views/common/footer.php') ?>

	</body>
</html>
