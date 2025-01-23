@extends('layouts.auth.master')

@section('title', 'Login')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href=""><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img class="img-fluid for-dark"
                                    src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form"  method="POST" action="{{ route('login') }}">
                             @csrf
                                <h4>Sistema de Ayudas Sociales IMC</h4>
                                <p>Por Favor ingresar Nombre de Usuario y Contraseña</p>

                                <div class="form-group">
                                    <label class="col-form-label">Correo Electónico</label>
                                    <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="admin@example.com" required autocomplete="email" autofocus placeholder="test@gmail.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Contraseña</label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="123456789" required autocomplete="current-password"
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="link" href="{{ route('password.request') }}">¿Olvidó Su Contraseña?</a>
                                    @endif
                                    <div class="text-end">
                                        <button class="btn btn-primary btn-block w-100 mt-3 spinner-btn" type="submit">Iniciar Sesión</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $('.btn.spinner-btn').click(function(event) {
        event.preventDefault();

        var $btn = $(this);
        $btn.removeClass('btn-block');
        $btn.prop('disabled', true);
        $btn.append('<span class="spinner-border spinner-border-sm spinner_loader" role="status" aria-hidden="true"></span>');

        $(this).parents('form')[0].submit();
    });
</script>
@endsection
