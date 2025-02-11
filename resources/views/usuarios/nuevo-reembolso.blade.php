@extends('layouts.master')

@section('title', 'Nuevo Reembolso - I. Municipalidad Coinco')

@section('css')
    <!-- Aquí puedes incluir tus archivos CSS adicionales -->
@endsection

@section('style')
    <!-- Puedes añadir más estilos personalizados si es necesario -->
@endsection

@section('breadcrumb-title')
    <h3>Crear Nuevo Reembolso</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Reembolso</li>
    <li class="breadcrumb-item active">Nuevo</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>A continuación usted creará un nuevo reembolso.</h5>
                    </div>

                    <!-- Formulario para crear un nuevo reembolso -->
                    <form class="needs-validation theme-form" novalidate="" onsubmit="enviar();"
                        action="{{ route('reembolso.store', $usuario->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <!-- Solicitud y Cantidad -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputSolicitud">Solicitud</label>
                                        <input class="form-control" id="inputSolicitud" type="text" required
                                            name="solicitud">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputCantidad">Cantidad</label>
                                        <input class="form-control" id="inputCantidad" type="number" min="0"
                                            max="100" required name="cantidad" placeholder="0">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Motivo -->
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputMotivo">Motivo</label>
                                        <input class="form-control" id="inputMotivo" type="text" required name="motivo"
                                            maxlength="255" placeholder="...">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>
                            </div>



                            <!-- Prestación -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputPrestacion">Prestación</label>
                                        <input class="form-control" id="inputPrestacion" type="text" required
                                            name="prestacion" maxlength="255" placeholder="...">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Entregado -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputEntregado">Entregado</label>
                                        <input class="form-control" id="inputEntregado" type="number" min="0"
                                            max="5" required name="entregado" maxlength="255" placeholder="...">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Botones de acción -->
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" id="btn" type="submit">Grabar</button>
                            <input class="btn btn-light" type="reset" value="Cancelar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var session_layout = '{{ session()->get('layout') }}';
    </script>

@endsection

@section('script')
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.es.js') }}"></script>

    <script>
        // Función para deshabilitar el botón por 3 segundos
        function enviar() {
            var btn = document.getElementById('btn');
            btn.setAttribute('disabled', '');
            setTimeout(function() {
                btn.removeAttribute('disabled');
            }, 5000); // 5000 milisegundos = 5 segundos
        }
    </script>
@endsection
