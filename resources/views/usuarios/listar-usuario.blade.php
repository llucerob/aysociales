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

    <!-- Modal de Devolución -->
    <div class="modal fade" id="modalDevolucion" tabindex="-1" aria-labelledby="modalDevolucionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDevolucionLabel">Solicitar Devolución</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Formulario de solicitud de devolución.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Enviar Solicitud</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal para cambiar estado a fallecido --}}
    <div class="modal fade" id="modalFallecido" tabindex="-1" aria-labelledby="modalFallecidoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFallecidoLabel">Marcar como Fallecido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>editar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <!-- Eliminar el enlace mal formado y usar solo el botón -->
                    <button type="button" class="btn btn-primary" id="modalFallecido">Aceptar</button>
                </div>
            </div>
        </div>
    </div>




    {{-- css perso --}}
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
                // Desactiva el ajuste automático de los anchos de las columnas
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
                        <button class="m-1 btn imprimir btn-secondary btn-sm" title="Imprimir"><i class="fa fa-file-pdf-o"></i></button>
                        <button class="m-1 btn devolucion btn-info btn-sm" title="Solicitar Devolución" data-bs-toggle="modal" data-bs-target="#modalDevolucion"><i class="fa fa-money"></i></button>
                        <button class="m-1 btn aumentar btn-success btn-sm" title="Modificar %" data-bs-toggle="modal" data-bs-target="#modalAumentar"><i class="fa fa-plus"></i></button>
                        <button class="m-1 btn btn-warning btn-sm editar" title="Ver ficha"><i class="fa fa-book"></i></button>
                        <a href={{ route('usuario.editar') }}>
                        <button class="m-1 btn btn-danger fallecido btn-sm" title="Marcar como fallecido">
                        <i class="icofont icofont-skull-face"></i>
                        </button>
                        </a>`
                    }
                ],
                initComplete: function() {
                    this.api().columns.adjust().draw();
                }
            });




            // Función para manejar eventos de los botones
            var obtener_data = function(tbody, tabla, accion, url) {
                $(tbody).on('click', 'button.' + accion, function() {
                    var data = tabla.row($(this).parents('tr')).data();
                    location.href = url + "/" + data.id;
                });
            }

            //obtener_data_eliminar('#beneficiarios', tabla);
            obtener_data_solicitar('#beneficiarios', tabla);
            obtener_data_imprimir('#beneficiarios', tabla);
            obtener_data_aumentar('#beneficiarios', tabla);
            obtener_data_devolucion('#beneficiarios', tabla);
            obtener_data_editar('#beneficiarios', tabla);
            obtener_data_fallecido('#beneficiarios', tabla);

            obtener_data_ver('#beneficiarios', tabla);
            obtener_data_comentario('#beneficiarios', tabla);

        });

        var obtener_data_solicitar = function(tbody, tabla) {
            $(tbody).on('click', 'button.solicitar', function() {
                var data = tabla.row($(this).parents('tr')).data();

                location.href = "solicitar/" + data.id;

            })
        }
        var obtener_data_imprimir = function(tbody, tabla) {
            $(tbody).on('click', 'button.imprimir', function() {
                var data = tabla.row($(this).parents('tr')).data();

                location.href = +data.id + "/imprimir/";

            })
        }
        var obtener_data_aumentar = function(tbody, tabla) {
            $(tbody).on('click', 'button.aumentar', function() {
                var data = tabla.row($(this).parents('tr')).data();
                var idregistro = $('#idregistro').val(data.idficha);

                var inputporcentaje = $('#inputporcentaje').val(data.porcentaje);

            })
        }
        var obtener_data_devolucion = function(tbody, tabla) {
            $(tbody).on('click', 'button.devolucion', function() {
                var data = tabla.row($(this).parents('tr')).data();

                var usuario = $('#usuario').val(data.id);


            })
        }
        var obtener_data_editar = function(tbody, tabla) {
            $(tbody).on('click', 'button.editar', function() {
                var data = tabla.row($(this).parents('tr')).data();
                location.href = "editar/" + data.id;
            })
        }

        var obtener_data_fallecido = function(tbody, tabla) {
            $(tbody).on('click', 'button.fallecido', function() {
                var data = tabla.row($(this).parents('tr')).data();
                var idusuario = $('#idusuario').val(data.id);
            })
        }

        /*var obtener_data_eliminar = function(tbody, tabla){
            $(tbody).on ('click', 'button.eliminar', function(){
                var data = tabla.row($(this).parents('tr')).data();
                location.href = "destroy/"+data.id;
            })
        }*/
        var obtener_data_ver = function(tbody, tabla) {
            $(tbody).on('click', 'button.ver', function() {
                var data = tabla.row($(this).parents('tr')).data();
                location.href = +data.id + "/verpedidos";
            })
        }

        var obtener_data_fallecido = function(tbody, tabla) {
            $(tbody).on('click', 'button.fallecido', function() {
                var data = tabla.row($(this).parents('tr')).data();
                var idusuario = data.id; // Obtienes el ID del usuario de la fila seleccionada

                // Redirige directamente al usuario a la vista correspondiente (ajusta la URL según tu necesidad)
                location.href = '/usuarios/fallecido/' +
                    idusuario; // Cambia esta URL por la vista que quieras redirigir
            });
        };

        var obtener_data_comentario = function(tbody, tabla) {
            $(tbody).on('click', 'button.comentario', function() {
                var data = tabla.row($(this).parents('tr')).data();
                if (data.comentario) {
                    var comentario = $('#contComentario').html(data.comentario);



                } else {
                    var comentario = $('#contComentario').html('No se ha ingresado comentario');
                }


            })
        }
    </script>
@endsection
