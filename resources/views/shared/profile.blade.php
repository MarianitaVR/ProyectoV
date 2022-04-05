@extends('layouts.app')

@section('title', 'Información de mi cuenta')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('shared.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid">
                @include('shared.header')
                <div class="content d-flex flex-column flex-column-fluid mt-20">
                    @include('home.components.navbar')
                    <div class="mt-20">
                        <div class="content d-flex flex-column flex-column-fluid">
                            <form action="{{ route('profile.update', Auth::user()->uuid) }}" method="POST"
                                class="post d-flex flex-column-fluid">
                                @method('PATCH')
                                @csrf
                                <div class="container-xxl">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>¡Oyeeeee!</strong> Hemos encontrado los siguientes
                                            problemas.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="card mb-5 mb-xl-10">
                                        <div class="card-header border-0 cursor-pointer" role="button"
                                            data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                                            aria-expanded="true" aria-controls="kt_account_profile_details">
                                            <div class="card-title m-0">
                                                <h3 class="fw-bolder m-0">Información de {{ Auth::user()->names }}
                                                    {{ Auth::user()->surnames }}</h3>
                                            </div>
                                        </div>
                                        <div class="collapse show">

                                            <div class="card-body border-top p-9">
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">UUID</label>
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="uuid"
                                                            class="form-control form-control-lg form-control-solid disabled"
                                                            value="{{ Auth::user()->uuid }}" disabled readonly />
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-bold fs-6">Nombres</label>
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="names"
                                                            class="form-control form-control-lg form-control-solid @error('names') is-invalid @enderror"
                                                            value="{{ Auth::user()->names }}" />
                                                        @error('names')
                                                            @if ($message == 'The names must not be greater than 36 characters.')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>Los nombres sólo puede tener 36 letras.</strong>
                                                                </span>
                                                            @else
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>Los nombres es un campo requerido.</strong>
                                                                </span>
                                                            @endif
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">Apellidos</span>
                                                    </label>
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="surnames"
                                                            class="form-control form-control-lg form-control-solid @error('surnames') is-invalid @enderror"
                                                            value="{{ Auth::user()->surnames }}" />
                                                        @error('surnames')
                                                            @if ($message == 'The surnames must not be greater than 36 characters.')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>Los apellidos sólo puede tener 36
                                                                        letras.</strong>
                                                                </span>
                                                            @else
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>Los apellidos es un campo requerido.</strong>
                                                                </span>
                                                            @endif
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">Identificación</span>
                                                    </label>
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="number"
                                                            class="form-control form-control-lg form-control-solid  @error('identification') is-invalid @enderror"
                                                            value="{{ Auth::user()->identification }}" readonly
                                                            disabled />
                                                        @error('identification')
                                                            @if ($message == 'The identification must not be greater than 36 characters.')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>La identificación sólo puede tener 36
                                                                        letras.</strong>
                                                                </span>
                                                            @else
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>La identificación es un campo
                                                                        requerido.</strong>
                                                                </span>
                                                            @endif
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">Dirección</span>
                                                    </label>
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="address"
                                                            class="form-control form-control-lg form-control-solid  @error('address') is-invalid @enderror"
                                                            value="{{ Auth::user()->address }}" />
                                                        @error('address')
                                                            @if ($message == 'The address must not be greater than 60 characters.')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>La dirección sólo puede tener 60
                                                                        letras.</strong>
                                                                </span>
                                                            @else
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>La dirección es un campo requerido.</strong>
                                                                </span>
                                                            @endif
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">Rol</span>
                                                    </label>
                                                    <div class="col-lg-8 fv-row">
                                                        <input class="form-control form-control-lg form-control-solid"
                                                            value="{{ Auth::user()->idRol == 1 ? 'Administrador (a)' : 'Empleado (a)' }}"
                                                            readonly disabled />
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span>Fecha de creación</span>
                                                    </label>
                                                    <div class="col-lg-8 fv-row">
                                                        <input class="form-control form-control-lg form-control-solid"
                                                            value="{{ Auth::user()->created_at->toFormattedDateString() }} - {{ Auth::user()->created_at->format('h:i:s') }}"
                                                            readonly disabled />
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span>Última actualización</span>
                                                    </label>
                                                    <div class="col-lg-8 fv-row">
                                                        <input class="form-control form-control-lg form-control-solid"
                                                            value="{{ Auth::user()->updated_at->toFormattedDateString() }} - {{ Auth::user()->updated_at->format('h:i:s') }}"
                                                            readonly disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                <button type="submit" class="btn btn-primary"
                                                    id="kt_account_profile_details_submit">Guardar cambios</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-5 mb-xl-10">
                                        <div class="card-header border-0 cursor-pointer" role="button"
                                            data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                                            <div class="card-title m-0">
                                                <h3 class="fw-bolder m-0">Información avanzada</h3>
                                            </div>
                                        </div>
                                        <div class="collapse show">
                                            <div class="card-body border-top p-9">
                                                <div class="d-flex flex-wrap align-items-center mb-10">
                                                    <div>
                                                        <div class="fs-6 fw-bolder mb-1">Contraseña</div>
                                                        <div class="fw-bold text-gray-600">************</div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <button onclick="toggleFormPassword()" type="button"
                                                            class="btn btn-light btn-active-light-primary">Actualizar
                                                            contraseña</button>
                                                    </div>
                                                </div>
                                                <div id="pass_form" class="d-none row mt-20">
                                                    <div class="col-12 mb-10">
                                                        <label class="required form-label">Nueva contraseña</label>
                                                        <input type="text" name="password" class="form-control" value=""
                                                            autocomplete="off" />
                                                    </div>
                                                    <button type="submit" class="btn btn-success fw-bold">Cambiar
                                                        contraseña</button>
                                                </div>
                                            </div>
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

    <script>
        function toggleFormPassword(params) {
            document.getElementById('pass_form').classList.toggle('d-none');
        }
    </script>
@endsection
