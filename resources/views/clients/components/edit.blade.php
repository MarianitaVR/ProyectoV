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
        {{-- <form action="{{ route('clients.store') }}" method="POST" class="form d-flex flex-column flex-lg-row">
            @csrf --}}
        <div class="form d-flex flex-column flex-lg-row">
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <a href="{{ route('clients.index') }}" class="btn btn-danger">
                    <span class="indicator-label">Volver atrás</span>
                </a>
                <form action="{{ route('clients.update', $client->uuid) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Información de {{ $client->names }} {{ $client->surnames }}</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Nombres</label>
                                        <input type="text" name="names"
                                            class="form-control mb-2 @error('names') is-invalid @enderror"
                                            value="{{ old('names') ?? $client->names }}" autocomplete="off" />
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
                                            value="{{ old('surnames') ?? $client->surnames }}" autocomplete="off" />
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
                                            value="{{ old('identification') ?? $client->identification }}"
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
                                            value="{{ old('address') ?? $client->address }}" autocomplete="off" />
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
                                                if($client->status == 1) {
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
                                        <label class="required form-label">Telefóno</label>
                                        <input type="text" name="phone"
                                            class="form-control mb-2 @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') ?? $client->phone }}" autocomplete="off" />
                                        @error('phone')
                                            @if ($message == 'The phone must not be greater than 12 characters.')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>El telefóno sólo puede tener 12 números.</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>El telefóno es un campo requerido.</strong>
                                                </span>
                                            @endif
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Actualizar
                                    información</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
