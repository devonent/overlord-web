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
				<h3>¿Qué es Overlord?</h3>
				<p class="text-large">
					Overlord es una tienda de instrumentos y productos musicales. Esta tienda musical promociona desde productos básicos, hasta productos más profesionales de la industria, buscando satisfacer
					las necesidades de sus clientes.<br><br>
					
					Principalmente se enfoca en la promoción de guitarras eléctricas, baterías, pianos y monitores, buscando expandir sus categorías en el futuro.
				</p>
			</div>
		</div>
	</div>
	<!-- End Align Area -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>