@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                style="background-color: #F2C98A">
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <form method="POST" action="{{ route('login') }}" class="form w-100">
                            @csrf
                            <div class="text-center mb-10">
                                <p class="text-dark mb-3 fs-1"><span class="fw-bolder">Página restringida</span> |
                                    <span class="fs-3">Iniciar sesión</span>
                                </p>
                            </div>
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bolder text-dark" for="email">Correo electrónico</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                    type="email" name="email" id="name" value="{{ old('email') }}" autocomplete="off"
                                    autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        @if ($message == 'These credentials do not match our records.')
                                            <strong>No existe una cuenta con las credenciales ofrecidas.</strong>
                                        @else
                                            <strong>El correo electrónico es un campo requerido.</strong>
                                        @endif
                                    </span>
                                @enderror
                            </div>
                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <label for="password"
                                        class="form-label fw-bolder text-dark fs-6 mb-0">Contraseña</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">¿Has
                                            olvidado la contraseña?</a>
                                    @endif
                                </div>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                    type="password" name="password" value="{{ old('password') }}"
                                    autocomplete="off" id="password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>La contraseña es un campo requerido.</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Continuar</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
