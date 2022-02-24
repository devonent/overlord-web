<?= $this->extend('portal_views/templates/base_portal') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
				<br>
				
			</div>
		</div>
	</div>
	<!-- End Align Area -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>