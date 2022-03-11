<?= $this->extend('panel_views/templates/base_panel') ?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= base_url('panel_resources/assets/vendors/iconly/bold.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="bi-list"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Guitarras registradas</h6>
                            <h6 class="font-extrabold mb-0">15</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="bi-box"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Baterías registradas</h6>
                            <h6 class="font-extrabold mb-0">15</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="bi-view-stacked"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Teclados registrados</h6>
                            <h6 class="font-extrabold mb-0">15</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon purple">
                                <i class="bi-speaker"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Monitores registrados</h6>
                            <h6 class="font-extrabold mb-0">15</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------------------------------------------- -->
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5 ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon gray">
                                <i class="bi-archive"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Productos totales registrados</h6>
                            <h6 class="font-extrabold mb-0">60</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon yellow">
                                <i class="bi-people"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Usuarios registrados</h6>
                            <h6 class="font-extrabold mb-0">7</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon pink">
                                <i class="bi-view-stacked"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Ofertas disponibles</h6>
                            <h6 class="font-extrabold mb-0">12</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>