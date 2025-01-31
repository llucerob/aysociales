@extends('layouts.master')

@section('title', 'Listar Usuarios')

@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Listar Usuarios</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Escritorio</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Usuarios</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="usuarios">
                        <thead>
                            <tr>
                                <th>RUT</th>
                                <th>Nombres</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Los datos se cargarán mediante DataTables -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para marcar como fallecido -->
<div class="modal fade" id="modalFallecido" tabindex="-1" role="dialog" aria-labelledby="modalFallecido" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atención</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data" id="formFallecer">
                @csrf
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <div class="text-center modal-img">
                            <img src="{{ asset('assets/images/gif/danger.gif') }}" width="100px" alt="error">
                        </div>
                        <h4 class="pb-2 text-center">¿Realmente desea marcar como fallecido este registro?</h4>
                        <p class="text-center">Esta acción no se puede deshacer</p>
                        <input type="hidden" id="idusuario" name="idusuario">
                        <button class="m-auto btn btn-secondary d-flex" type="submit">Marcar como Fallecido</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.es.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>

<script>
    $(document).ready(function() {
    var tabla = $('#usuarios').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-CL.json'
        },
        ajax: {
            url: '{{ route('usuarios.listar') }}',  // La ruta correcta
            type: 'Post',
            dataSrc: 'data',  // Asegúrate de que 'data' es la propiedad que contiene los datos en el JSON
            success: function(response) {
                console.log('Respuesta del servidor:', response); // Muestra la respuesta completa del servidor
            },
            error: function(xhr, status, error) {
                console.log('Error AJAX:', status, error); // Esto te dará detalles si algo sale mal en la petición AJAX
            }
        },
        columns: [
            { data: 'rut' },
            { data: 'nombres' },
            { data: 'telefono' },
            { data: 'correo' },
            {
                data: 'acciones',
                orderable: false,
                render: function(data, type, row) {
                    return data; // Aquí se renderizan los botones de acción
                }
            }
        ],
        processing: true,
        serverSide: true,
        responsive: true
    });

    // Funciones para cada acción de la tabla
    obtener_data_editar('#usuarios', tabla);
    obtener_data_fallecido('#usuarios', tabla);
    obtener_data_imprimir('#usuarios', tabla);
});


    var obtener_data_imprimir = function(tbody, tabla) {
        $(tbody).on('click', 'button.imprimir', function() {
            var data = tabla.row($(this).parents('tr')).data();
            // Lógica para imprimir el usuario
            window.open('/usuarios/' + data.id + '/imprimir', '_blank');
        });
    };

    var obtener_data_editar = function(tbody, tabla) {
        $(tbody).on('click', 'button.editar', function() {
            var data = tabla.row($(this).parents('tr')).data();
            location.href = "/usuarios/" + data.id + "/editar";
        });
    };

    var obtener_data_fallecido = function(tbody, tabla) {
        $(tbody).on('click', 'button.fallecido', function() {
            var data = tabla.row($(this).parents('tr')).data();
            $('#formFallecer').attr('action', '/usuarios/' + data.id + '/fallecer');
            $('#modalFallecido').modal('show');
        });
    };
</script>
@endsection
