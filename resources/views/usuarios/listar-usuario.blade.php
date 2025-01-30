@extends('layouts.master')

@section('title', 'Listar Usuarios')

@section('css')
    <!-- Incluye aquí tus archivos CSS -->
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

    <!-- Modal para aumentar porcentaje -->
    <div class="modal fade" id="modalAumentar" tabindex="-1" role="dialog" aria-labelledby="modalAumentar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro social Hogares</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" enctype="multipart/form-data" id="formModificarPorcentaje">
                    @csrf
                    <div class="modal-body">
                        <div class="col">
                            <label for="porcentaje">Porcentaje</label>
                            <input type="number" class="form-control" id="porcentaje" name="porcentaje" min="0" max="100" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Modificar Porcentaje</button>
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
        language: { url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-CL.json' },
        ajax: '{{ route('datatable.usuarios') }}',  // Asegúrate de que esta ruta sea correcta
        columns: [
            { data: 'rut' },
            { data: 'nombres' },
            { data: 'telefono' },
            { data: 'correo' },
            {
                data: null,  // Usamos `null` ya que no estamos vinculando a un campo específico
                orderable: false,  // Deshabilitar el ordenamiento en esta columna
                render: function(data, type, row) {
                    // Generar botones dinámicamente basados en los datos de la fila
                    return `
                        <button class="m-1 btn imprimir btn-secondary btn-sm" title="Imprimir"><i class="fa fa-file-pdf-o"></i></button>
                        <button class="m-1 btn editar btn-primary btn-sm" title="Editar"><i class="fa fa-pencil"></i></button>
                        <button class="m-1 btn fallecido btn-danger btn-sm" title="Marcar como fallecido"><i class="fa fa-times-circle"></i></button>
                    `;
                }
            }
        ],
        processing: true,  // Habilita el indicador de carga
        serverSide: true,  // Habilita el modo servidor para DataTables
        ajax: {
            url: '{{ route('datatable.usuarios') }}',
            type: 'GET',
        }
    });
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
