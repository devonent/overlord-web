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
                            Usuarios registrados
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-last text-end">
                            <a href="<?= base_url('panel/usuarios/registrar_usuario') ?>" class="btn btn-success">
                                <span class="btn-icon"><i class="bi bi-person-plus-fill"></i></span>
                                Registrar usuario nuevo
                            </a>
                        </div>
                    </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped datatable-overlord">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre completo</th>
                                    <th>Sexo</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($users_all as $user) {
                                        echo '
                                        <tr>
                                            <td>'.++$i.'</td>
                                            <td>'.$user->nombre.'</td>
                                            <td>'.SEXES[$user->sexo].'</td>
                                            <td>'.$user->email.'</td>
                                            <td>'.$user->rol.'</td>
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
    <script src="<?= base_url('panel_resources/assets/js/views/overlord-all-datatable-init.js') ?>"></script>    
<?= $this->endSection() ?>