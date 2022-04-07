<!-- Aca estamos utilizando el codigo que hay en la carpeta shared y el archico head -->
@extends('shared/head')

@section('title', 'Agregar Producto')

@section('content')
<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
        @include('shared.sidebar')
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @include('shared.header')
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                @include('producto/components/navbar')

                <!-- Codigo de formulario para el registro -->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <div id="kt_content_container" class="container-xxl">
                        <form action="{{ route('producto.store')}}" method="POST" id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row">
                            @csrf
                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                        <div class="d-flex flex-column gap-7 gap-lg-10">
                                            <div class="card card-flush py-4">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Registro de los productos</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="d-flex flex-wrap gap-5">

                                                        <div class="fv-row w-100 flex-md-root">
                                                            <label class="required form-label">Nombre prooducto </label>
                                                            <input type="text" name="nombreProducto" class="form-control mb-2" placeholder="Nombre del producto" value="" />
                                                        </div>

                                                        <div class="fv-row w-100 flex-md-root">
                                                            <label class="required form-label">Descripcion</label>
                                                            <input type="text" name="descripcionProducto" class="form-control mb-2" placeholder="Descripción del producto" value="" />
                                                        </div>


                                                        <div class="fv-row w-100 flex-md-root">
                                                            <label class="required form-label">Categoría producto</label>
                                                            <select class="form-select mb-2" name="idCategoria" data-control="select2" data-hide-search="true" data-placeholder="Categoría producto">
                                                                <option></option>
                                                                @foreach($categoriaproductos as $categoriaproducto)
                                                                <option value="{{$categoriaproducto->idCategoria}}">{{$categoriaproducto->descripcioProducto}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="d-flex flex-wrap gap-5">

                                                    <div class="fv-row w-100 flex-md-root">
                                                            <label class="required form-label">Stock </label>
                                                            <input type="text" name="stock" class="form-control mb-2" placeholder="Stock del Producto" value="" />
                                                        </div>
                                                        <div class="fv-row w-100 flex-md-root">
                                                            <label class="required form-label">Precio por unidad </label>
                                                            <input type="text" name="precioProducto" class="form-control mb-2" placeholder="Precio del Producto" value="" />
                                                        </div>

                                                        <div class="fv-row w-100 flex-md-root">
                                                            <label class="required form-label">Estado</label>
                                                            <select class="form-select mb-2" name="estadoProducto" data-control="select2" data-hide-search="true" data-placeholder="Seleciona un estado">
                                                                <option></option>
                                                                <option value="1">Activo</option>
                                                                <option value="2">Inactivo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bonotes -->
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{route('producto.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                                    <button type="submit" name="btnregistrar" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                        <span class="indicator-label">Registrar</span>

                                    </button>
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
