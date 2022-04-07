@extends('shared/head')

@section('title', 'Editar Categoria')

@section('content')
  <div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
            @include('shared.sidebar')
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('shared.header')
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                  @include('categoria.components.navbar')

                  <!-- Codigo de formulario para el registro -->
          <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
              <form action="{{ route('categoria.update', $categoria->idCategoria)}}" method="POST"  id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row">
                        @csrf
                        @method('PUT')
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <div class="tab-content">
                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                      <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                          <div class="card-header">
                            <div class="card-title">
                              <h2>Modificar Categoria</h2>
                            </div>
                          </div>
                            <div class="card-body pt-0">
                              <div class="d-flex flex-wrap gap-5">

                                  <div class="fv-row w-100 flex-md-root">
                                    <label class="required form-label">Descripción Categoria</label>
                                      <input type="text" name="descripcioProducto" value="{{$categoria->descripcioProducto}}" class="form-control mb-2" placeholder="" />
                                  </div>

                              </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                      <!-- Bonotes -->
                      <div class="d-flex justify-content-end">
                        <a href="{{route('categoria.index')}}" id="kt_ecommerce_add_product_cancel"
                        class="btn btn-light me-5">Cancel</a>
                         <button type="submit" name="btnregistrar" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                          <span class="indicator-label">Modificar</span>

                    </button>
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
