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
	<title>Overlord - Iniciar sesión</title>

	<!--
		CSS
		============================================= -->
	<?php require_once "public_resources/modules/public_styles.php"?>
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<?php require_once "public_resources/modules/public_navbrand.php"?>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php require_once "public_resources/modules/public_navcontent.php"?>
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
					<h1>Iniciar sesión</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= base_url('/') ?>">Inicio<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Iniciar sesión</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="login_form_inner mb-5">
						<h3>Iniciar sesión</h3>
						<!-- <form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate"> -->
						<?php 
							$data = array(
								'id' => 'form-login',
								'class' => 'row login_form'
							);
							echo form_open('iniciar_sesion', $data);
						?>
							<div class="col-md-12 form-group">
								<!-- <input type="text" class="form-control" id="name" name="name" placeholder="Usuario" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Usuario'"> -->
								<?php 
									$data = array (
										'type' => 'email',
										'class' => 'form-control',
										'id' => 'email',
										'name' => 'email',
										'placeholder' => 'Ingresa tu e-mail',
										'required' => '',
										'maxlength' => '60'
									);
									echo form_input($data);
								?>
							</div>
							<div class="col-md-12 form-group">
								<!-- <input type="text" class="form-control" id="name" name="name" placeholder="Contraseña" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contraseña'"> -->
								<?php 
									$data = array (
										'type' => 'password',
										'class' => 'form-control',
										'id' => 'password',
										'name' => 'password',
										'placeholder' => 'Ingresa tu contraseña',
										'required' => '',
										'maxlength' => '60'
									);
									echo form_input($data);
								?>
							</div>
							<div class="col-md-12 form-group mb-5">
								<button type="submit" value="submit" class="primary-btn">Ingresar</button>
							</div>
						<?=
							form_close();
						?>
						<!-- </form> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<?php require_once "public_resources/modules/public_scripts.php"?>
	<?php require_once "public_resources/modules/public_footer.php"?>
</body>

</html>