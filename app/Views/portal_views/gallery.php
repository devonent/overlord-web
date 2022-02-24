<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Overlord - Galería</title>

	<!-- CSS
            ============================================= -->
	<?php require_once "portal_resources/modules/public_styles.php"?>

	<link rel="stylesheet" href="<?= base_url('portal_resources/css/magnific-popup.css') ?>" />
</head>

<body>
	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<?php require_once "portal_resources/modules/public_navbrand.php"?>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php require_once "portal_resources/modules/public_navcontent.php"?>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header Area -->
	
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Galería</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= base_url('/') ?>">Inicio<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Galería</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	
	<!-- Start Align Area -->
	<div class="whole-wrap pb-100">
		<div class="container my-5">
			<div class="section-top-border text-center">
				<h3>¿Necesitas un poco de inspiración?</h3>
				<p>Mira algunas fotos asombrosas de algunos productos que recopilamos.</p>
				<div class="row gallery-item">
					<div class="col-md-4">
						<a href="<?= base_url('portal_resources/img/gallery/g1.jpg') ?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?= base_url('portal_resources/img/gallery/g1.jpg') ?>);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="<?= base_url('portal_resources/img/gallery/g2.jpg') ?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?= base_url('portal_resources/img/gallery/g2.jpg') ?>);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="<?= base_url('portal_resources/img/gallery/g3.jpg') ?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?= base_url('portal_resources/img/gallery/g3.jpg') ?>);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="<?= base_url('portal_resources/img/gallery/g4.jpg') ?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?= base_url('portal_resources/img/gallery/g4.jpg') ?>);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="<?= base_url('portal_resources/img/gallery/g5.jpg') ?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?= base_url('portal_resources/img/gallery/g5.jpg') ?>);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="<?= base_url('portal_resources/img/gallery/g6.jpg') ?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?= base_url('portal_resources/img/gallery/g6.jpg') ?>);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="<?= base_url('portal_resources/img/gallery/g7.jpg') ?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?= base_url('portal_resources/img/gallery/g7.jpg') ?>);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="<?= base_url('portal_resources/img/gallery/g8.jpg') ?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?= base_url('portal_resources/img/gallery/g8.jpg') ?>);"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

	<?php require_once "portal_resources/modules/public_scripts.php"?>
	<?php require_once "portal_resources/modules/public_footer.php"?>
</body>

</html>