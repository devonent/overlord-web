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
	<title>Overlord - <?= $section_name ?></title>

	<!-- CSS -->
    <link rel="shortcut icon" href="<?= base_url('portal_resources/img/overlord_s_positive.png') ?>">
    <link rel="stylesheet" href="<?= base_url('portal_resources/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('portal_resources/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('portal_resources/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('portal_resources/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('portal_resources/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('portal_resources/css/nouislider.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('portal_resources/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('portal_resources/css/main.css') ?>">
    <!-- =============================== -->
    <!-- CSS's específicos de las vistas -->
    <?= $this->renderSection("css") ?>
    <!-- =============================== -->
</head>

<body>
	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h py-4" href="<?= base_url('/') ?>"><img src="<?= base_url('portal_resources/img/overlord_h_positive.png') ?>" alt=""></a>
                    <button class="navbar-toggler my-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <?= $menu ?>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        </ul>
                    </div>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header Area -->

    <!-- =================== -->
    <!-- Contenido principal -->
    <?= $this->renderSection("content") ?>
    <!-- =================== -->

    <footer class="footer-area section_gap pb-4 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-5 px-lg-5">
                    <div class="single-footer-widget">
                        <h6>Explora</h6>
                        <a href="<?= base_url('/ofertas') ?>" class="extra-links">Ofetas</a><br>
                        <a href="<?= base_url('/instrumentos/guitarras') ?>" class="extra-links">Guitarras</a><br>
                        <a href="<?= base_url('/instrumentos/baterias') ?>" class="extra-links">Baterías</a><br>
                        <a href="<?= base_url('/instrumentos/teclados') ?>" class="extra-links">Teclados</a><br>
                        <a href="<?= base_url('/instrumentos/monitores') ?>" class="extra-links">Monitores</a><br>
                    </div>
                </div>

                <div class="col-lg-4 col-5 px-lg-5">
                    <div class="single-footer-widget">
                        <h6>Sobre nosotros</h6>
                        <p>Overlord es un sitio web en el cual puedes revisar información interesante sobre miles de productos de la industria musical.</p>
                        <a href="/nosotros" class="extra-links">Saber más...</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-5 px-lg-5">
                    <div class="single-footer-widget">
                        <h6>Síguenos</h6>
                        <p>Puedes darnos follow en nuestras redes sociales y saber más de nuestras publicaciones</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-5 px-lg-5">
                    <div class="single-footer-widget">
                        <h6>Iniciar sesión</h6>
                        <p>Si eres miembro oficial de overlord, puedes iniciar sesión <a href="/login" class="extra-links"><strong>aquí</strong></a>.</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0 pt-5"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos resevados | <strong>Overlord</strong> | Esta plantilla está hecha con <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('portal_resources/js/vendor/jquery-2.2.4.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?= base_url('portal_resources/js/vendor/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('portal_resources/js/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="<?= base_url('portal_resources/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('portal_resources/js/jquery.sticky.js') ?>"></script>
    <script src="<?= base_url('portal_resources/js/nouislider.min.js') ?>"></script>
    <script src="<?= base_url('portal_resources/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('portal_resources/js/owl.carousel.min.js') ?>"></script>
    <!--gmaps Js-->
    <script src="<?= base_url('portal_resources/js/gmaps.min.js') ?>"></script>
    <script src="<?= base_url('portal_resources/js/main.js') ?>"></script>

    <!-- ============================== -->
    <!-- JS's específicos de las vistas -->
    <?= $this->renderSection("js") ?>
    <!-- ============================== -->

</body>

</html>