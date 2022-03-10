<?= $this->extend('portal_views/templates/base_portal') ?>

<?= $this->section('css') ?>
	<link rel="stylesheet" href="<?= base_url('portal_resources/css/magnific-popup.css') ?>" />
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
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>