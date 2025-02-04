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
                    <th>Acciones</th> <!-- Nueva columna para acciones -->
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
        <!-- Aquí puedes agregar campos del formulario de devolución -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar Solicitud</button>
      </div>
    </div>
  </div>
</div>

<!-- Incluir CSS de DataTables y Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<!-- Incluir jQuery y Bootstrap Bundle -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Incluir DataTables JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    var $j = jQuery.noConflict(); // Asegura que no haya conflicto con otras bibliotecas que usen `$`

    $j(document).ready(function() {
        var tabla = $j('#usuariosdt').DataTable({
            serverSide: true,
            responsive: true,
            ajax: '{{ route('usuarios.data') }}', // Ruta para obtener los datos de la tabla
            columns: [
                { data: 'rut' },
                { data: 'nombres' },
                { data: 'apellidos' },
                { data: 'telefono' },
                { data: 'correo' },
                {
                    orderable: false,
                    searchable: false,
                    defaultContent: `
                        <button class="m-1 btn imprimir btn-secondary btn-sm" title="Imprimir"><i class="fa fa-file-pdf-o"></i></button>
                        <button class="m-1 btn devolucion btn-info btn-sm" title="Solicitar Devolución" data-bs-toggle="modal" data-bs-target="#modalDevolucion"><i class="fa fa-money"></i></button>
                        <button class="m-1 btn aumentar btn-success btn-sm" title="Modificar %" data-bs-toggle="modal" data-bs-target="#modalAumentar"><i class="fa fa-plus"></i></button>
                        <button class="m-1 btn btn-warning btn-sm editar" title="Ver ficha"><i class="fa fa-book"></i></button>
                        <button class="m-1 btn btn-danger fallecido btn-sm" title="Marcar como fallecido" data-bs-toggle="modal" data-bs-target="#modalFallecido"><i class="icofont icofont-skull-face"></i></button>`
                }
            ]
        });

        // Función para manejar eventos de los botones
        var obtener_data = function(tbody, tabla, accion, url) {
            $(tbody).on('click', 'button.' + accion, function() {
                var data = tabla.row($(this).parents('tr')).data();
                location.href = url + "/" + data.id;
            });
        }

        // Asociar acciones a los botones de la tabla
        obtener_data('#usuariosdt tbody', tabla, 'imprimir', 'imprimir');
        obtener_data('#usuariosdt tbody', tabla, 'devolucion', 'devolucion');
        obtener_data('#usuariosdt tbody', tabla, 'aumentar', 'aumentar');
        obtener_data('#usuariosdt tbody', tabla, 'editar', 'editar');
        obtener_data('#usuariosdt tbody', tabla, 'fallecido', 'fallecido');
    });
</script>
@endsection
