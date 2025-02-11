@extends('layouts.master')

@section('title', 'Editar usuario - I. Municipalidad Coinco')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Ficha Municipal</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Usuario</li>
    <li class="breadcrumb-item active">Ficha</li>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row starter-main">


            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Datos Personales</h5>

                    </div>




                    <form class="needs-validation theme-form" novalidate=""
                        action="{{ route('usuario.editar', $usuario->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row g-3">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputNombre">Nombre</label>
                                        <input class="form-control" id="inputNombre" type="text" required name="nombres"
                                            value="{{ $usuario->nombres }}" placeholder="Juan Alberto">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputApellidos">Apellidos</label>
                                        <input class="form-control" id="inputApellidos" type="text" required
                                            name="apellidos" value="{{ $usuario->apellidos }}" placeholder="Perez Perez">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>

                            </div>



                            <div class="row g-3">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputRut">Rut</label>
                                        <input class="form-control" id="inputRut" type="text" name="rut"
                                            data-role="input, input-mask" data-mask="________-_"
                                            value="{{ $usuario->rut }}">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputfnac">Fecha Nacimiento</label>
                                        <input class="datepicker-here form-control digits" data-lenguage="es" id="inputfnac"
                                            type="text" name="fnac" placeholder="12-01-1999"
                                            value="{{ $usuario->fnac }}">
                                        <div class="valid-feedback">¡Luce bien!</div>
                                    </div>
                                </div>

                            </div>

                            <div class="row g-3">

                                <div class="mt-3 col-md-3">
                                    <div class="mb-3">
                                        <label class="col-form-label m-r-10 form-label" for="registro">¿Desea modificar el
                                            Nº de registro social?


                                            <div class="media-body text-end "></div>
                                            <label class="switch">
                                                <input type="checkbox" onchange="cambio();" id="registro"
                                                    name="registro"><span class="switch-state"></span>
                                            </label>
                                    </div>

                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="inputRegistrosocial">Registro Social</label>
                                    <input class="form-control" id="inputRegistrosocial" type="text" required
                                        name="registrosocial" readOnly placeholder="1252831"
                                        value="{{ $usuario->folioid }}">
                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="inputPorcentaje">Porcentaje</label>
                                    <input class="form-control" id="inputPorcentaje" type="number" name="porcentaje"
                                        required readOnly placeholder="99" value="{{ $usuario->porcentaje }}">
                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="inputgrupofam">Grupo Familiar</label>
                                    <input class="form-control" id="inputgrupofam" type="number" name="grupofam"
                                        required placeholder="99" value="{{ $usuario->grupofamiliar }}">
                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>

                        </div>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="inputDireccion">Dirección</label>
                                    <input class="form-control" id="inputDireccion" type="text" name="direccion"
                                        placeholder="avda. siempre viva" value="{{ $usuario->direccion }}">
                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="selectSector">Sector</label>
                                    <select class="form-select digits" id="selectSector" name="sector">

                                        @foreach ($sector as $s)
                                            <option value="{{ $s->nombre }}"
                                                @if ($s->nombre == $usuario->sector) selected @endif>{{ $s->nombre }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>

                        </div>


                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="inputTelefono">Teléfono</label>
                                    <input class="form-control" id="inputTelefono" type="text" name="telefono"
                                        placeholder="Perez Perez" value="{{ $usuario->telefono }}">
                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="inputCorreo">Email</label>
                                    <input class="form-control" id="inputCorreo" type="email" name="correo"
                                        placeholder="algo@algo.com" value="{{ $usuario->correo }}">
                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>

                            <div hidden class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="inputComentario">Opinión Profesional</label>
                                    <input class="form-control" id="inputComentario" type="textarea" name="comentario"
                                        placeholder="escriba un comentario aqui" value="{{ $usuario->comentario }}">
                                    <div class="valid-feedback">¡Luce bien!</div>
                                </div>
                            </div>

                        </div>




                </div>










                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Actualizar datos Personales</button>
                    <input class="btn btn-light" type="reset" value="Cancel">
                </div>
                </form>



            </div>
        </div>





    </div>

    <script type="text/javascript">
        var session_layout = '{{ session()->get('layout') }}';
    </script>

@endsection

@section('script')

    <script src="{{ asset('assets/js/height-equal.js') }}"></script>






    <script>
        function cambio() {
            if (document.getElementById("registro").checked) {
                document.getElementById('inputPorcentaje').readOnly = false;
                document.getElementById('inputRegistrosocial').readOnly = false;
            }
        }
    </script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.es.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>

@endsection
