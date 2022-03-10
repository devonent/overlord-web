<?= $this->extend('panel_views/templates/base_panel') ?>

<?= $this->section('css') ?>
    <!-- Hoja de estilos para implementar datatables -->
    <link rel="stylesheet" href="<?= base_url('panel_resources/assets/vendors/simple-datatables/style.css') ?>">
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
                    <table class="table table-striped datatable-users" id="datatable-users">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre completo</th>
                                <th>Sexo</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for ($i=0; $i < 50; $i++) { 
                                    echo '
                                    <tr>
                                        <td>'.($i + 1).'</td>
                                        <td>Nombre</td>
                                        <td>Sexo</td>
                                        <td>Email</td>
                                        <td>Rol</td>
                                        <td>Editar</td>
                                        <td>Eliminar</td>
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
    <!-- Scripts para datatables -->
    <script src="<?= base_url('panel_resources/assets/vendors/simple-datatables/simple-datatables.js') ?>"></script>
    <script src="<?= base_url('panel_resources/assets/js/views/users-all-datatable-init.js') ?>"></script>
<?= $this->endSection() ?>