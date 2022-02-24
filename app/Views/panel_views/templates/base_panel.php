<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> | Overlord</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('panel_resources/assets/css/bootstrap.css') ?>">

    <link rel="stylesheet" href="<?= base_url('panel_resources/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('panel_resources/assets/vendors/bootstrap-icons/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('panel_resources/assets/css/app.css') ?>">
    <link rel="stylesheet" href="<?= base_url('panel_resources/assets/vendors/fontawesome/all.min.css') ?>">

    <link rel="shortcut icon" href="<?= base_url('panel_resources/assets/images/favicon.svg" type="image/x-icon') ?>">
    <!-- =============================== -->
    <!-- CSS's específicos de las vistas -->
    <?= $this->renderSection("css") ?>
    <!-- =============================== -->

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header pt-3">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?= route_to('dashboard') ?>"><img src="<?= base_url('panel_resources/assets/images/logo/logo.png') ?>" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Menu lateral -->
                <div class="sidebar-menu">
                    <ul class="menu">
                        <!-- ================== -->
                        <!-- MENÚ DE NAVEGACIÓN -->
                        <?= $menu ?>
                        <!-- ================== -->
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <!-- Navbar -->
        <div id="main" class='layout-navbar'>
            <header class='mb-0'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid px-1">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-list fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            

                            <!-- ================== -->
                            <!-- Perfil del usuario -->
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"><?= $user_full_name ?></h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex ">
                                            <div class="avatar avatar-md">
                                                
                                                <img src="<?= base_url('panel_resources/assets/images/faces/' . ($user_img == NULL ? ($user_sex == MALE_SEX ? 'avatar-m1.jpg' : 'avatar-f1.jpg') : $user_img)); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hola, <?= $user_name ?>!</h6>
                                    </li>
                                   
                                    <li><a class="dropdown-item" href="<?= route_to('cerrar_sesion') ?>"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Cerrar sesión</a></li>
                                </ul>
                            </div>
                            <!-- =============== -->

                        </div>
                    </div>
                </nav>
            </header>

            <!-- Contenido de la sección -->
            <div id="main-content" class="pt-0">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Vertical Layout with Navbar</h3>
                                <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <!-- ========== -->
                                <!-- Breadcrumb -->
                                
                                <!-- ========== -->

                                <!-- <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar
                                        </li>
                                    </ol>
                                </nav> -->
                            </div>
                        </div>
                    </div>

                    <section class="section">
                        <!-- =================== -->
                        <!-- Contenido principal -->
                        <?= $this->renderSection("content") ?>
                        <!-- =================== -->

                        <!-- <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Example Content</h4>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis
                                laudantium tempore
                                exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio
                                reprehenderit
                                distinctio incidunt! Vel aspernatur dicta consequatur!
                            </div>
                        </div> -->
                    </section>

                </div>

            </div>
        </div>
    </div>

    <script src="<?= base_url('panel_resources/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('panel_resources/assets/js/bootstrap.bundle.min.js') ?>"></script>

    <script src="<?= base_url('panel_resources/assets/js/main.js') ?>"></script>

    <!-- ============================== -->
    <!-- JS's específicos de las vistas -->
    <?= $this->renderSection("js") ?>
    <!-- ============================== -->
</body>

</html>