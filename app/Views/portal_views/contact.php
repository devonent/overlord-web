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
	<title>Overlord - Contacto</title>

	<!-- CSS
            ============================================= -->
	<?php require_once "portal_resources/modules/public_styles.php"?>
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
					<h1>Contáctanos</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= base_url('/') ?>">Inicio<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Contácto</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container-fluid">
			<div class="text-center my-5 mb-3">
				<h2>¿Quieres comunicarte?</h2>
				<p>Si necesitas ayuda adicional o si quieres comunicarte con nosotros, puedes encontrarnos por los siguientes medios.</p>
			</div>
			<!-- <div id="mapBox" class="mapBox mt-0 mb-5" data-lat="19.316661700880307" data-lon="-98.24373681709666" data-zoom="14" data-info="Av. Vicente Guerrero 53-A, Centro, 90000 Tlaxcala de Xicohténcatl, Tlax., México"
			 data-mlat="19.316661700880307" data-mlon="-98.24373681709666">
			</div>	 -->
			<div class="row contact_info text-center justify-content-center">
				<!-- <div class="col-12"> -->
					<!-- <div class="contact_info"> -->
						<!-- <div class="info_item col-3 shadow-sm pt-3 mx-2">
							<i class="lnr lnr-home"></i>
							<h6>Av. Vicente Guerrero 53-A, Centro</h6>
							<p>90000 Tlaxcala de Xicohténcatl, Tlax., México</p>
						</div>
						<div class="info_item col-3 shadow-sm pt-3 mx-2">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">246 123 8228</a></h6>
							<p>Lunes a viernes de 8:00 am a 8:00 pm</p>
						</div> -->
						<div class="info_item col-3 shadow-sm pt-3 mx-2">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">dapec_15@hotmail.com</a></h6>
							<p>Envianos tus preguntas en cualquier momento</p>
						</div>
					<!-- </div> -->
				<!-- </div> -->
				<!-- <div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu nombre'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu email'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Ingresa tu tema/situación" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu tema/situación'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Escríbenos tu mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escríbenos tu mensaje'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Enviar mensaje</button>
						</div>
					</form>
				</div> -->
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

	<?php require_once "portal_resources/modules/public_scripts.php"?>
	<?php require_once "portal_resources/modules/public_footer.php"?>
</body>

</html>