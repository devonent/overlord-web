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
	<title>Overlord - El autor</title>

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
					<h1>Acerca del autor</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= base_url('/') ?>">Inicio<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Acerca de<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">El autor</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	
	<!-- Start Align Area -->
	<div class="whole-wrap pb-100">
		<div class="container my-5 col-4">
			<div class="section-top-border">
				<h3>Darien Pérez Cano</h3>
				<p class="text-large">
					Mi nombre es Darien Pérez Cano, estudiante de la Universidad Politécnica de Tlaxcala. Actualmente estoy cursando la Ingeniería en Tecnologías de la Información.<br><br>
					Mi correo electrónico es: dapec_15@hotmail.com
				</p>
				
			</div>
		</div>
	</div>
	<!-- End Align Area -->

	<?php require_once "portal_resources/modules/public_scripts.php"?>
	<?php require_once "portal_resources/modules/public_footer.php"?>
</body>

</html>