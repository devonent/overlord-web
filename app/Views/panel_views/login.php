<?= $this->extend('portal_views/templates/base_portal') ?>

<?= $this->section('css') ?>
	<link rel="stylesheet" href="<?= base_url('panel_resources/assets/vendors/toastify/toastify.css') ?>">
	<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
	<section class="login_box_area section_gap pt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url('portal_resources/img/login.jpg') ?>" alt="">
						<div class="hover">
							<h4>Accede al panel de administración</h4>
							<p>Asegurate de ingresar las credenciales de una cuenta válida. Solo se permite el acceso a personal autorizado.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
					<div class="login-icon pb-4"><i class="fa fa-user-circle fa-5x" aria-hidden="true"></i></div>
						<h3>Iniciar sesión</h3>
						<?php 
							$data = array(
								'id' => 'form-login',
								'class' => 'row login_form'
							);
							echo form_open('iniciar_sesion', $data);
						?>
							<div class="col-md-12 form-group">
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
							<div class="col-md-12 form-group my-4">
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
<?= $this->endSection() ?>

<?= $this->section('js') ?>
	<script src="<?= base_url('panel_resources/assets/vendors/toastify/toastify.js') ?>"></script>
	<script><?= print_message() ?></script>
<?= $this->endSection() ?>