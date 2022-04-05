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
        <div class="form d-flex flex-column flex-lg-row">
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <a href="{{ route('clients.index') }}" class="btn btn-danger">
                    <span class="indicator-label">Volver atrás</span>
                </a>
                <form action="{{ route('clients.store') }}" method="POST">
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
                                        <label class="form-label">Nombres</label>
                                        <input type="text" name="names" class="form-control mb-2"
                                            value="{{ $client->names }}" autocomplete="off" readonly />
                                    </div>
                                    <div class="col-6 mb-10">
                                        <label class="form-label">Apellidos</label>
                                        <input type="text" name="surnames" class="form-control mb-2"
                                            value="{{ $client->surnames }}" autocomplete="off" readonly />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Identificación</label>
                                        <input type="text" name="identification" class="form-control mb-2"
                                            value="{{ $client->identification }}" autocomplete="off" readonly />
                                    </div>
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Telefóno</label>
                                        <input type="text" name="phone" class="form-control mb-2"
                                            value="{{ $client->phone }}" autocomplete="off" readonly />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Dirección</label>
                                        <input type="text" name="address" class="form-control mb-2"
                                            value="{{ $client->address }}" autocomplete="off" readonly />
                                    </div>
                                    <div class="col-6 mb-10">
                                        <label class="required form-label">Estado de cliente</label>
                                        <input type="text" name="names" class="form-control mb-2"
                                            value="{{ $client->status == 1 ? 'Habilitado' : 'Deshabilitado' }}"
                                            autocomplete="off" readonly />
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
