<?= $this->extend('portal_views/templates/base_portal') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1><?= $section_name ?></h1>
					<?= $breadcrumb ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	
	<!-- Start Align Area -->
	<div class="whole-wrap pb-100">
		<div class="container my-5 col-4">
			<div class="section-top-border">
				<h3>El contenido de Overlord</h3>
				<p class="text-large">
					Este sitio web es de práctica, y tiene fines únicamente educativos. Las imagenes y la información de los productos que se muestran en este sitio 
					son propiedad de <a href="https://www.gear4music.com/">Gear4Music</a>. La plantilla fue elaborada por <a href="https://colorlib.com/">Colorlib</a>
					y fue obtenida a través del sitio web <a href="https://themewagon.com/">ThemeWagon</a>.<br><br>
					No existe la empresa Overlord. Los datos de contacto se utilizan con fines demostrativos y de práctica.
				</p>
			</div>
		</div>
	</div>
	<!-- End Align Area -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>