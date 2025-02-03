@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Usuarios</h2>
    <table id="usuariosdt" class="table table-bordered">
        <thead>
            <tr>
                <th>RUT</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo</th>

            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<!-- Agregar jQuery y DataTables -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

<script>
    var $j = jQuery.noConflict(); // Asegura que no haya conflicto con otras bibliotecas que usen `$`

    $j(document).ready(function() {
    var tabla = $j('#usuariosdt').DataTable({

        serverSide: true,

        ajax: '{{ route('usuarios.data') }}',
        columns: [
            { data: 'rut' },
            { data: 'nombres' },
            { data: 'apellidos' },
            { data: 'telefono' },
            { data: 'correo' },

            {
                orderable: false,  // El campo de acciones no debe ser ordenable
                searchable: false,  // El campo de acciones no debe ser searchable

            }
        ],

    });
});


        // Funciones para manejar las acciones en los botones
        // obtener_data_imprimir('#usuariosdt tbody', tabla);
        // obtener_data_editar('#usuariosdt tbody', tabla);
        // obtener_data_fallecido('#usuariosdt tbody', tabla);


    // // Función para la acción de imprimir
    // var obtener_data_imprimir = function(tbody, tabla) {
    //     $j(tbody).on('click', 'button.imprimir', function() {
    //         var data = tabla.row($j(this).parents('tr')).data();
    //         console.log("Datos del usuario para imprimir:", data); // Agregado para depuración
    //         // Lógica para imprimir el usuario
    //         window.open('/usuarios/' + data.id + '/imprimir', '_blank');
    //     });
    // };

    // // Función para la acción de editar
    // var obtener_data_editar = function(tbody, tabla) {
    //     $j(tbody).on('click', 'button.editar', function() {
    //         var data = tabla.row($j(this).parents('tr')).data();
    //         console.log("Datos del usuario para editar:", data); // Agregado para depuración
    //         location.href = "/usuarios/" + data.id + "/editar";
    //     });
    // };

    // // Función para la acción de marcar como fallecido
    // var obtener_data_fallecido = function(tbody, tabla) {
    //     $j(tbody).on('click', 'button.fallecido', function() {
    //         var data = tabla.row($j(this).parents('tr')).data();
    //         console.log("Datos del usuario para marcar como fallecido:", data); // Agregado para depuración
    //         $j('#formFallecer').attr('action', '/usuarios/' + data.id + '/fallecido');
    //         $j('#modalFallecido').modal('show');
    //     });
    // };
</script>
@endsection
