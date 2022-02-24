<?= $this->extend('portal_views/templates/base_portal') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
			<div class="row contact_info text-center justify-content-center">
				<div class="info_item col-3 shadow-sm pt-3 mx-2">
					<i class="lnr lnr-envelope"></i>
					<h6><a href="#">dapec_15@hotmail.com</a></h6>
					<p>Envianos tus preguntas en cualquier momento</p>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>