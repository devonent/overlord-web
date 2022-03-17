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
                            Monitores registrados
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-last text-end">
                            <a href="<?= base_url('panel/monitores/registrar_monitor') ?>" class="btn btn-success">
                                <span class="btn-icon"><i class="bi bi-plus-circle-fill"></i></span>
                                Registrar monitor nuevo
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
                                    <th>No. monitores</th>
                                    <th>Dimensiones (WxHxD)</th>
                                    <th>Precio (MXN)</th>
                                    <th>Stock</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($monitors_all as $monitor) {
                                        echo '
                                        <tr>
                                            <td>'.++$i.'</td>
                                            <td>'.$monitor->marca.'</td>
                                            <td>'.$monitor->modelo.'</td>
                                            <td>'.$monitor->no_monitores.'</td>
                                            <td>'.$monitor->anchura_mm.'mm x '.$monitor->altura_mm.'mm x '.$monitor->profundidad_mm.' mm</td>
                                            <td>$ '.$monitor->precio.'</td>
                                            <td>'.$monitor->stock.'</td>
                                            <td class="text-center">
                                                <div class="btn-group" >
                                                    <a href="'.route_to('panel/monitores/editar_monitor/', $monitor->id_monitor).'" class="btn btn-primary">
                                                        <i class="bi bi-pencil-fill btn-icon-datatable"></i>
                                                    </a>
                                                    <a href="'.route_to('panel/monitores/eliminar_monitor/', $monitor->id_monitor).'" class="btn btn-danger">
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