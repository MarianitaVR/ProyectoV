<div class="post d-flex flex-column-fluid mt-10" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
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
        <div class="d-flex w-100 mb-10">
            <a href="{{ route('calendar.index') }}" class="btn btn-danger">
                <span class="indicator-label">Volver atrás</span>
            </a>
            <form action="{{ route('calendar.destroy', $calendar->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-warning ms-6">
                    <span class="indicator-label">Cancelar evento</span>
                </button>
            </form>
        </div>
        <form action="{{ route('calendar.update', $calendar->id) }}" method="POST"
            class="form d-flex flex-column flex-lg-row">
            @method('PATCH')
            @csrf
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Editar evento</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-10 row">
                                <div class="col-12 col-lg-6">
                                    <label class="required form-label">Cliente</label>
                                    <select class="form-select mb-3 @error('uuidClient') is-invalid @enderror"
                                        name="uuidClient">
                                        <option></option>
                                        @foreach ($clients as $client)
                                            <option <?php
                                                if ($client->uuid == $calendar->uuidClient) {
                                                        ?>selected
                                                <?php
                                                            }
                                                            ?>value="{{ $client->uuid }}">
                                                {{ $client->names }} {{ $client->surnames }}
                                                #{{ $client->identification }}</option>
                                        @endforeach
                                    </select>
                                    @error('uuidClient')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>El cliente es un campo requerido.</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="required form-label">Responsable</label>
                                    <select class="form-select mb-3 @error('uuidResponsible') is-invalid @enderror"
                                        name="uuidResponsible">
                                        <option></option>
                                        @foreach ($users as $user)
                                            <option <?php
                                            if ($user->uuid == $calendar->uuidResponsible) {
                                                    ?>selected
                                                <?php
                                                        }
                                                        ?>value="{{ $user->uuid }}">
                                                {{ $user->names }} {{ $user->surnames }}
                                                #{{ $user->identification }}</option>
                                        @endforeach
                                    </select>
                                    @error('uuidResponsible')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>El responsable es un campo requerido.</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-10 row">
                                <div class="col-12 col-lg-6">
                                    <label class="required form-label">Fecha</label>
                                    <input type="date" name="date" id="date"
                                        class="form-control mb-2 @error('date') is-invalid @enderror" autocomplete="off"
                                        value="{{ $calendar->start }}" />
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>La fecha es un campo requerido.</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="required form-label">Hora</label>
                                    <input type="time" name="time" id="time"
                                        class="form-control mb-2 @error('time') is-invalid @enderror" autocomplete="off"
                                        value="{{ $calendar->time }}" />
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>El tiempo es un campo requerido.</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">Descripción</label>
                                <textarea name="description" id="description" class="form-control mb-2 @error('description') is-invalid @enderror" id=""
                                    cols="30" rows="10">{{ $calendar->title }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>La descripción es un campo requerido.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Guardar</span>
                        <span class="indicator-progress">Espere...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
