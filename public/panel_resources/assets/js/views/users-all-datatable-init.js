// let table1 = document.querySelector('.datatable-users');
// let dataTable = new simpleDatatables.DataTable(table1);

$(document).ready(function(){
    $('.datatable-users').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
                "previous": '<i class="bi bi-caret-left-fill text-muted btn-icon-datatable-paginate"></i>',
                "next": '<i class="bi bi-caret-right-fill text-muted btn-icon-datatable-paginate"></i>'
            },
            "emptyTable": "No hay información",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
            "infoEmpty": "No existen registros para mostrar",
            "infoFiltered": "Filtrado de un total de _MAX_ registros",
            "sSearch": "Buscar",
            "sProcessing": "Procesando...",
            "loadingRecords": "Cargando...",
            "thousands": ","
        },
        "columnDefs": [
            { 
                "searchable": false, 
                "orderable": false,
                "targets": [5] 
            }
        ]
    });
});