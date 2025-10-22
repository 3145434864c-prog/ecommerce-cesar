<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-white">
                    <a href="" class="btn btn-principal py-2 px-3 btn-sm rounded-pill text-reset"><i class="fas fa-user-plus me-1"></i>Agregar Administrador</a>
                </h3>
            </div>
        </div>

            <div class="card-body">
                <div class="table-resposive">
                    <table class="table table-bordered table-striped aling-middle w-100" id="tablaAdmins">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Ultimo Login</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>

                        
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    $(document).ready(function(){
        const tablaAdmins = $('#tablaAdmins').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "<?=$path?>ajax/administradores/listaAdministradores.php",
            type: "GET"
        },
        columns:[
            {data:0, className:"text-center"},
            {data:1},
            {data:2},
            {data:3,className:"text-center"},
            {data:4,className:"text-center"},
            {data:5,orderable:false, searchable:false,className:"text-center"},
        ],
        order:[[0,'asc']],
        pageLength:10,
        responsive:true,
        autoWidth:false,
          language: {
            url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json" 
            },
            drawCallback:function(){
                $('[data-bs-toggle="tooltip"]').tooltip();
            }
        });
    })

//     $("#tablaAdmins").DataTable({
//   responsive: true,
//   pageLength: 10,
//   lengthMenu: [10, 25, 50, 100],
//   order: [[0, "desc"]],
//   language: {
    // "decimal": "",
    // "emptyTable": "No hay datos disponibles en la tabla",
    // "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
    // "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
    // "infoFiltered": "(filtrado de _MAX_ entradas totales)",
    // "lengthMenu": "Mostrar _MENU_ entradas",
    // "loadingRecords": "Cargando...",
    // "processing": "Procesando...",
    // "search": "Buscar:",
    // "zeroRecords": "No se encontraron registros coincidentes",
    // "paginate": {
    //     "first": "Primero",
    //     "last": "Último",
    //     "next": "Siguiente",
    //     "previous": "Anterior"
    // },

//     url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json",
//   },
//   lengthChange: true,
//   autoWidth: false,
//   processing: true,
//   serverSide: true,
//   ajax: {
//     url: "../ajax/administradores/listaAdministradores.php",
//     type: "POST",
//   },
// });



</script>