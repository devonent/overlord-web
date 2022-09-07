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
				<p>Mira algunas fotos asombrosas de nuestros productos.</p>
				<div class="row gallery-item">
					<?php
					$img_size = 0;
					$col_lenght = 4;
						foreach($imagenes as $imagen){
							if($img_size == 3){
								$col_lenght = 6;
							}else if($img_size == 5){
								$col_lenght = 4;
								$img_size = 0;
							}

							echo'
							<div class="col-md-'.$col_lenght.'">
								<a href="'. base_url(INS_IMG_ROUTE.$imagen->imagen) .'" class="img-pop-up">
									<div class="single-gallery-image" style="background: url('. base_url(INS_IMG_ROUTE.$imagen->imagen) .');"></div>
								</a>
							</div>
							';

							$img_size++;
						}//end foreach
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>