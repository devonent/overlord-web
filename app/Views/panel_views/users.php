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
                    Usuarios registrados
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
    <script src="<?= base_url('panel_resources/assets/vendors/simple-datatables/user-datatable-init.js') ?>"></script>
    <!-- <script>
        $(document).ready(function(){
            $('#datatable-users').DataTable({
                "responsive": true,
                "language": {
                    "paginate": {
                        "previous": '<i class="fas fa-angle-left"></i>',
                        "next": '<i class="fas fa-angle-right"></i>'
                    },
                    "emptyTable": "No hay información",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados.",
                    "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar",
                    "sProcessing": "Procesando...",
                    "loadingRecords": "Cargando...",
                    "thousands": ","
                }
            });
        });
    </script> -->
    <!-- <script>
        $(document).ready(function(){
            let dataTable = new simpleDatatables.DataTable('#datatable-users', {
                "responsive": true,
                "language": {
                    "paginate": {
                        "previous": '<i class="fas fa-angle-left"></i>',
                        "next": '<i class="fas fa-angle-right"></i>'
                    },
                    "emptyTable": "No hay información",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados.",
                    "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar",
                    "sProcessing": "Procesando...",
                    "loadingRecords": "Cargando...",
                    "thousands": ","
                }
            });
        });
    </script> -->
    <!-- <script>
        function load(){
            let dataTable = new simpleDatatables.DataTable('#datatable-users', {
                "responsive": true,
                "language": {
                    "paginate": {
                        "previous": '<i class="fas fa-angle-left"></i>',
                        "next": '<i class="fas fa-angle-right"></i>'
                    },
                    "emptyTable": "No hay información",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados.",
                    "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar",
                    "sProcessing": "Procesando...",
                    "loadingRecords": "Cargando...",
                    "thousands": ","
                }
            });
        };
        window.onload = load;
    </script> -->
<?= $this->endSection() ?>