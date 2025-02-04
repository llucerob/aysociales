@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Lista Reembolsos</h2>
    <table id="reembolsosdt" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cantidad</th>
                <th>Solicitud</th>
                <th>Motivo</th>
                <th>Tipo Prestación</th>
                <th>Boleta</th>
                <th>Entregado</th>
                <th>Acciones</th> <!-- Nueva columna para acciones -->
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<!-- Incluir CSS de DataTables y Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<!-- Incluir jQuery y Bootstrap Bundle -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Versión más estable -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Incluir DataTables JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    var $j = jQuery.noConflict(); // Asegura que no haya conflicto con otras bibliotecas que usen `$`

    $j(document).ready(function() {
        var tabla = $j('#reembolsosdt').DataTable({
            serverSide: true,  // Habilita el procesamiento del lado del servidor
            responsive: true,  // Hace que la tabla sea más adaptable en dispositivos móviles
            ajax: '{{ route('reembolso.data') }}',  // Ruta para cargar los datos
            columns: [
                { data: 'id' },
                { data: 'cantidad' },
                { data: 'solicitud' },
                { data: 'motivo' },
                { data: 'tipoprestacion' },
                { data: 'boleta' },
                { data: 'entregado' },
                {
                    orderable: false,  // El campo de acciones no debe ser ordenable
                    searchable: false,  // El campo de acciones no debe ser searchable
                    data: null,  // No trae datos de la base de datos, solo un botón
                    defaultContent: "<button class='editar'>Editar</button><button class='eliminar'>Eliminar</button>"
                }
            ]
        });
    });
</script>
@endsection
