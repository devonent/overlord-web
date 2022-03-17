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
                            Teclados registrados
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-last text-end">
                            <a href="<?= base_url('panel/teclados/registrar_teclado') ?>" class="btn btn-success">
                                <span class="btn-icon"><i class="bi bi-plus-circle-fill"></i></span>
                                Registrar teclado nuevo
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
                                    <th>No. teclas</th>
                                    <th>Dimensiones (WxHxD)</th>
                                    <th>Precio (MXN)</th>
                                    <th>Stock</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($keyboards_all as $keyboard) {
                                        echo '
                                        <tr>
                                            <td>'.++$i.'</td>
                                            <td>'.$keyboard->marca.'</td>
                                            <td>'.$keyboard->modelo.'</td>
                                            <td>'.$keyboard->no_teclas.'</td>
                                            <td>'.$keyboard->anchura_mm.'mm x '.$keyboard->altura_mm.'mm x '.$keyboard->profundidad_mm.' mm</td>
                                            <td>$ '.$keyboard->precio.'</td>
                                            <td>'.$keyboard->stock.'</td>
                                            <td class="text-center">
                                                <div class="btn-group" >
                                                    <a href="#!" class="btn btn-primary">
                                                        <i class="bi bi-pencil-fill btn-icon-datatable"></i>
                                                    </a>
                                                    <a href="'.route_to('panel/teclados/eliminar_teclado/', $keyboard->id_teclado).'" class="btn btn-danger">
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