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
        <form action="{{ route('users.store') }}" method="POST" class="form d-flex flex-column flex-lg-row">
            @csrf
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <a href="{{ route('users.index') }}" class="btn btn-danger">
                    <span class="indicator-label">Volver atrás</span>
                </a>
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Crear nuevo usuario</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-6 mb-10">
                                    <label class="required form-label">Nombres</label>
                                    <input type="text" name="names"
                                        class="form-control mb-2 @error('names') is-invalid @enderror"
                                        value="{{ old('names') }}" autocomplete="off" />
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
                                        value="{{ old('surnames') }}" autocomplete="off" />
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
                                        value="{{ old('identification') }}" autocomplete="off" />
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
                                    <label class="required form-label">Correo electrónico</label>
                                    <input type="email" name="email"
                                        class="form-control mb-2 @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" autocomplete="off" />
                                    @error('email')
                                        @if ($message == 'The email must not be greater than 60 characters.')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>El correo electrónico sólo puede tener 60 letras.</strong>
                                            </span>
                                        @else
                                            <span class="invalid-feedback" role="alert">
                                                <strong>El correo electrónico es un campo requerido.</strong>
                                            </span>
                                        @endif
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-10">
                                    <label class="required form-label">Dirección</label>
                                    <input type="text" name="address"
                                        class="form-control mb-2 @error('address') is-invalid @enderror"
                                        value="{{ old('address') }}" autocomplete="off" />
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
                                <div class="col-6 mb-10">
                                    <label class="required form-label">Contraseña</label>
                                    <input type="text" name="password"
                                        class="form-control mb-2 @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}" autocomplete="off" />
                                    @error('password')
                                        @if ($message == 'The password must not be greater than 16 characters.')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>La contraseña sólo puede tener 16 letras.</strong>
                                            </span>
                                        @else
                                            <span class="invalid-feedback" role="alert">
                                                <strong>La contraseña es un campo requerido.</strong>
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
                                        <option value="1">Habilitado</option>
                                        <option value="0">Deshabilitado</option>
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
                                        <option value="2">Empleado (a)</option>
                                        <option value="1">Administrador (a)</option>
                                    </select>
                                    @error('idRol')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>El tipo de rol es un campo requerido.</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/users/" class="btn btn-light me-5">Cancelar</a>
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Guardar</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
