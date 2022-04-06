<div class="post d-flex flex-column-fluid">
    <div class="container-xxl">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>¡Oyeeeee!</strong> Hemos encontrado los siguientes problemas.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- <form action="{{ route('users.store') }}" method="POST" class="form d-flex flex-column flex-lg-row">
            @csrf --}}
        <div class="form d-flex flex-column flex-lg-row">
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <form action="{{ route('users.update', $user->uuid) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Información de {{ $user->names }} {{ $user->surnames }}</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Nombres</label>
                                        <input type="text" name="names"
                                            class="form-control mb-2 @error('names') is-invalid @enderror"
                                            value="{{ old('names') ?? $user->names }}" autocomplete="off" />
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
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Apellidos</label>
                                        <input type="text" name="surnames"
                                            class="form-control mb-2 @error('surnames') is-invalid @enderror"
                                            value="{{ old('surnames') ?? $user->surnames }}" autocomplete="off" />
                                        @error('surnames')
                                            @if ($message == 'The surnames must not be greater than 36 characters.')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Los apellidos sólo puede tener 36 letras.</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Los apellidos es un campo requerido.</strong>
                                                </span>
                                            @endif
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Identificación</label>
                                        <input type="text" name="identification"
                                            class="form-control mb-2 @error('identification') is-invalid @enderror"
                                            value="{{ old('identification') ?? $user->identification }}"
                                            autocomplete="off" />
                                        @error('identification')
                                            @if ($message == 'The identification must not be greater than 36 characters.')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>La identificación sólo puede tener 36 letras.</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>La identificación es un campo requerido.</strong>
                                                </span>
                                            @endif
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Dirección</label>
                                        <input type="text" name="address"
                                            class="form-control mb-2 @error('address') is-invalid @enderror"
                                            value="{{ old('address') ?? $user->address }}" autocomplete="off" />
                                        @error('address')
                                            @if ($message == 'The address must not be greater than 60 characters.')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>La dirección sólo puede tener 60 letras.</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>La dirección es un campo requerido.</strong>
                                                </span>
                                            @endif
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Estado</label>
                                        <select name="status"
                                            class="form-select form-select-solid form-select-lg fw-bold @error('status') is-invalid @enderror">
                                            <?php
                                                if($user->status == 1) {
                                                    ?>
                                            <option value="1" selected>Habilitado</option>
                                            <option value="0">Deshabilitado</option>
                                            <?php
                                                } else {
                                                    ?>
                                            <option value="1">Habilitado</option>
                                            <option value="0" selected>Deshabilitado</option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>El estado es un campo requerido.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Rol</label>
                                        <select name="idRol"
                                            class="form-select form-select-solid form-select-lg fw-bold @error('idRol') is-invalid @enderror">
                                            <?php
                                                if($user->status == 1) {
                                                    ?>
                                            <option value="2">Empleado (a)</option>
                                            <option value="1" selected>Administrador (a)</option>
                                            <?php
                                                } else {
                                                    ?>
                                            <option value="2" selected>Empleado (a)</option>
                                            <option value="1">Administrador (a)</option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        @error('idRol')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>El tipo de rol es un campo requerido.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Actualizar
                                    información</button>
                            </div>
                        </div>
                        <div class="card mb-5 mb-xl-10">
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                                data-bs-target="#kt_account_signin_method">
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">Información avanzada para {{ $user->names }}
                                        {{ $user->surnames }}</h3>
                                </div>
                            </div>
                            <div class="collapse show">
                                <div class="card-body border-top p-9">

                                    <div class="d-flex flex-wrap align-items-center">
                                        <div>
                                            <div class="fs-6 fw-bolder mb-1">Correo electrónico</div>
                                            <div class="fw-bold text-gray-600">{{ $user->email }}
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <button type="button" onclick="toggleFormEmail()"
                                                class="btn btn-light btn-active-light-primary">Actualizar
                                                correo</button>
                                        </div>
                                    </div>
                                    <div id="address_form" class="d-none row mt-20">
                                        <div class="col-12 mb-10">
                                            <label class="required form-label">Dirección</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $user->email }}" autocomplete="off" />
                                        </div>
                                        <button type="submit" class="btn btn-success fw-bold">Cambiar correo
                                            electrónico</button>
                                    </div>
                                    <div class="separator separator-dashed my-6"></div>
                                    <div class="d-flex flex-wrap align-items-center mb-10">
                                        <div>
                                            <div class="fs-6 fw-bolder mb-1">Contraseña</div>
                                            <div class="fw-bold text-gray-600">************</div>
                                        </div>
                                        <div class="ms-auto">
                                            <button type="button" onclick="toggleFormPassword()"
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

<script>
    function toggleFormEmail() {
        document.getElementById('address_form').classList.toggle('d-none');
    }

    function toggleFormPassword(params) {
        document.getElementById('pass_form').classList.toggle('d-none');
    }
</script>
