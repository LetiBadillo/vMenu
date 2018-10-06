@extends('layouts.layout')
@section('content')
<section class="ftco-section pb-0">
      <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{url('/menu')}}">Menú</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
  </ol>
</nav>
</div>
</section>

<section class="ftco-section pt-0">
      <div class="container">
        <div class="row">
        <div class="col-md-4">
          <div class="item" id="product-detail-7">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="{{asset('platillos')}}/{{$product->picture}}" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h2 class="mt-0 text-uppercase">{{$product->name}}</h2>
                  </div>
                </div>
              </div>
            </div>

          <div class="col-md-8">
            <form id="dishFormUpdate" action="#" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PUT">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_fname">Nombre</label>
                            <small class="text-danger name_error feedback d-none"></small>
                            <input type="text" name="name" class="form-control" value="{{$product->name}}" id="m_fname">
                        </div>
                        <div class="col-md-12 form-group">
                        <label for="m_lname">Descripción</label>
                        <small class="text-danger description_error feedback d-none"></small>
                        <textarea class="form-control" id="m_message" name="description" cols="5" rows="3">{{$product->description}}</textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_people">Imagen</label>
                            <small class="text-danger picture_error feedback d-none"></small>
                            <input type="file" accept="image/*" class="form-control" name="picture">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="m_fname">Precio</label>
                            <small class="text-danger price_error feedback d-none"></small>
                            <input type="numeric" step=".01" name="price" value="{{$product->price}}" class="form-control" id="m_fname">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="m_people">Tipo</label>
                            <small class="text-danger is_featured_error feedback d-none"></small>
                            <select name="type" id="type" class="form-control">
                                <option value=""> --Selecionar --</option>
                                <option value="1">Desayuno </option>
                                <option value="2">Comida </option>
                                <option value="3"> Cena </option>
                                <option value="4"> Postre</option>
                                <option value="5"> Bebida</option>
                                <option value="6"> Combo</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 form-group">
                            <label for="m_people">Destacar como</label>
                            <small class="text-danger is_featured_error feedback d-none"></small>
                            <select id="is_featured" name="is_featured" class="form-control">
                                <option value=""> --Selecionar --</option>
                                <option value=""> No destacar</option>
                                <option value="7">Platillo del día </option>
                                <option value="8"> Recomendación del Chef </option>
                                <option value="10"> Banner</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 form-group">
                            @php $enabled_text = 'Inhabilitar'; 
                                if($product->enabled == 0)
                                    $enabled_text = "Habilitar";
                            @endphp
                            <label for="m_people">{{$enabled_text}}</label>
                            <small class="text-danger is_featured_error feedback d-none"></small>
                            @php $enabled = 0; 
                                if($product->enabled == 0)
                                    $enabled = 1;
                            @endphp
                            <input type="checkbox" name="enabled" value="{{$enabled}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label style="color: white !important;" for="m_people"></label>
                            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </section>
    <!-- END section -->
@endsection

@section('scripts')
<script>
    $(function() {

        var url_update_dish = "{{url('/menu')}}/{{$product->id}}";
        $('.hidden-element').addClass('d-none').hide();
        $('#is_featured').val("{{$product->is_featured}}");
        $('#type').val("{{$product->type}}");
        saveAjax($('#dishFormUpdate'), url_update_dish, 2);
    });
</script>
@endsection