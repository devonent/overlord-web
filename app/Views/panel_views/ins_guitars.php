<?= $this->extend('panel_views/templates/base_panel') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="row">
        <div class="col-12">
            <section class="section">
                <div class="card">
                    <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 order-md-1 order-first">
                            Guitarras registradas
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-last text-end">
                            <a href="<?= base_url('panel/guitarras/registrar_guitarra') ?>" class="btn btn-success">
                                <span class="btn-icon"><i class="bi bi-plus-circle-fill"></i></span>
                                Registrar guitarra nueva
                            </a>
                        </div>
                    </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped datatable-overlord">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Material del cuerpo</th>
                                    <th>No. cuerdas</th>
                                    <th>No. trastes</th>
                                    <th>Precio (MXN)</th>
                                    <th>Stock</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($guitars_all as $guitar) {
                                        echo '
                                        <tr>
                                            <td>'.++$i.'</td>
                                            <td>'.$guitar->marca.'</td>
                                            <td>'.$guitar->modelo.'</td>
                                            <td>'.$guitar->cuerpo.'</td>
                                            <td>'.$guitar->no_cuerdas.'</td>
                                            <td>'.$guitar->no_trastes.'</td>
                                            <td>$ '.$guitar->precio.'</td>
                                            <td>'.$guitar->stock.'</td>
                                            <td class="text-center">
                                                <div class="btn-group" >
                                                    <a href="#!" class="btn btn-primary">
                                                        <i class="bi bi-pencil-fill btn-icon-datatable"></i>
                                                    </a>
                                                    <a href="#!" class="btn btn-danger">
                                                        <i class="bi bi-trash-fill btn-icon-datatable"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>