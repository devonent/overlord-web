<?= $this->extend('portal_views/templates/base_portal') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb mb-5">
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

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="section-title text-center col-12 mb-3">
				<h1>¿Buscas una guitarra?</h1>
				<p>"Cada vez que levantes tu guitarra para tocar, toca como si fuera la última vez." <br> <em>~ Eric Clapton</em></p>
			</div>
			<div class="col-10 text-center">
				
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-5 category-list">
					<div class="row justify-content-center">
						<!-- single product -->
						<div class="col-lg-3 col-md-5 shadow-sm p-2 m-2">
							<div class="single-product my-0">
								<img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitar_default.jpg') ?>" alt="">
								<div class="product-details">
									<h6>Guitarra Gibson Test</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="lnr lnr-cross" style="transform: rotate(45deg);"></span>
											<p class="hover-text">Más info</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-3 col-md-5 shadow-sm p-2 m-2">
							<div class="single-product my-0">
								<img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitar_default.jpg') ?>" alt="">
								<div class="product-details">
									<h6>Guitarra Gibson Test</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="lnr lnr-cross" style="transform: rotate(45deg);"></span>
											<p class="hover-text">Más info</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-3 col-md-5 shadow-sm p-2 m-2">
							<div class="single-product my-0">
								<img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitar_default.jpg') ?>" alt="">
								<div class="product-details">
									<h6>Guitarra Gibson Test</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="lnr lnr-cross" style="transform: rotate(45deg);"></span>
											<p class="hover-text">Más info</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-3 col-md-5 shadow-sm p-2 m-2">
							<div class="single-product my-0">
								<img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitar_default.jpg') ?>" alt="">
								<div class="product-details">
									<h6>Guitarra Gibson Test</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="lnr lnr-cross" style="transform: rotate(45deg);"></span>
											<p class="hover-text">Más info</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-3 col-md-5 shadow-sm p-2 m-2">
							<div class="single-product my-0">
								<img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitar_default.jpg') ?>" alt="">
								<div class="product-details">
									<h6>Guitarra Gibson Test</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="lnr lnr-cross" style="transform: rotate(45deg);"></span>
											<p class="hover-text">Más info</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-3 col-md-5 shadow-sm p-2 m-2">
							<div class="single-product my-0">
								<img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitar_default.jpg') ?>" alt="">
								<div class="product-details">
									<h6>Guitarra Gibson Test</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="lnr lnr-cross" style="transform: rotate(45deg);"></span>
											<p class="hover-text">Más info</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>