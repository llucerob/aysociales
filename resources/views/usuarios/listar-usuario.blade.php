@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Usuarios</h2>
        <div class="table-responsive">
            <table id="usuariosdt" class="table table-bordered">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Los datos se cargarán aquí mediante DataTables -->
                </tbody>
            </table>
        </div>
    </div>

    {{-- CSS personalizado --}}
    <link rel="stylesheet" href="{{ asset('assets/css/datatabele.css') }}">

    <!-- Incluir CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Incluir CSS de DataTables con Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <!-- Incluir jQuery y Bootstrap Bundle -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Incluir DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        var $j = jQuery.noConflict(); // Asegura que no haya conflicto con otras bibliotecas que usen `$`

        $j(document).ready(function() {
            var tabla = $j('#usuariosdt').DataTable({
                serverSide: true,
                responsive: true,
                autoWidth: false,
                autoheight: true,
                paging: true, // Activa la paginación
                scrollY: '1000px', // Establece una altura fija para la tabla
                scrollCollapse: true,
                ajax: '{{ route('usuarios.data') }}', // Ruta para obtener los datos de la tabla
                columns: [{
                        data: 'rut'
                    },
                    {
                        data: 'nombres'
                    },
                    {
                        data: 'apellidos'
                    },
                    {
                        data: 'telefono'
                    },
                    {
                        data: 'correo'
                    },
                    {
                        orderable: false,
                        searchable: false,
                        defaultContent: `
                        <button class="m-1 btn btn-secondary imprimir btn-sm" title="Imprimir"><i class="fa fa-file-pdf-o"></i></button>
                        <button class="m-1 btn devolucion btn-info btn-sm" title="Solicitar Devolución" data-bs-toggle="modal" data-bs-target="#modalDevolucion"><i class="fa fa-money"></i></button>
                        <button class="m-1 btn btn-warning btn-sm editar" title="Ver ficha"><i class="fa fa-book"></i></button>
                        <button class="m-1 btn btn-danger modificar btn-sm" title="Modificar" data-bs-toggle="modal" data-bs-target="#modalModificar"><i class="icofont icofont-law-document"></i></button>
                        `
                    }
                ],
                initComplete: function() {
                    this.api().columns.adjust().draw();
                }
            });

            //

            $(document).on('click', 'button.modificar', function() {
                var data = tabla.row($(this).parents('tr')).data();
                var id = data.id;
                window.location.href = "{{ route('usuario.editar', ['id' => '__id__']) }}".replace('__id__',
                    id);
            });

            $(document).on('click', 'button.devolucion', function() {
                var data = tabla.row($(this).parents('tr')).data();
                var id = data.id;
                window.location.href = "{{ route('reembolso.nuevo', ['id' => '__id__']) }}".replace(
                    '__id__',
                    id);
            });

        });
    </script>
@endsection
