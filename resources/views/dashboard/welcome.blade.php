@extends('layouts.layout')
@section('content')
@if(count($products['banners']) ||count($products['chef_recomendation']) || count($products['dish_of_the_day']))
    <section class="ftco-cover" id="section-home">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      
                    @php $count = 0; @endphp
                      @if(count($products['dish_of_the_day']))
                      @foreach($products['dish_of_the_day'] as $banner)
                        <div class="carousel-item active product-detail-{{$banner->id}}" data-slide-number="{{$count}}">
                          <img class="first-slide product-img" src="{{url('platillos')}}/{{$banner->picture}}">
                            <div class="carousel-caption">
                              <div class="float-right col-lg-4">
                                  <div class="pricing-header bg-warning px-3 py-3 pt-md-5 pb-md-4">
                                      <h1>Platillo del día</h1>
                                      <h3 class="product-title">{{$banner->name}}</h3>
                                      @if(Auth::user() && Auth::user()->user_type == 1)
                                      <p class="py-1"><a href="{{url('menu')}}/{{$banner->id}}">Editar <i class="far fa-edit"></i></a></p>
                                      @endif
                                      <p class="lead">{{$banner->description}}</p>
                                      <p class="text-primary menu-price">$ {{$banner->price}}</p>
                                      <div class="input-group col-md-12 px-5 pb-2 text-center">
                                        <span data-id="{{$banner->id}}" class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                        <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                        <span data-id="{{$banner->id}}" class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                        <input type="hidden" class="price" value="{{$banner->price}}">
                                      </div>
                                    <p class="mb-0 pointer add-cart" data-id="{{$banner->id}}"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                                      <small>*La comida del día incluye sopa de entrada, bebida y postre*</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @php $count++; @endphp
                      @endforeach
                    @endif

                    @if(count($products['chef_recomendation']))
                      @foreach($products['chef_recomendation'] as $banner)
                        <div class="carousel-item product-detail-{{$banner->id}}" data-slide-number="{{$count}}">
                          <img class="first-slide product-img" src="{{url('platillos')}}/{{$banner->picture}}">
                          <div class="carousel-caption">
                              <div class="float-right col-lg-4">
                                  <div class="pricing-header bg-warning px-3 py-3 pt-md-5 pb-md-4">
                                      <h1>Recomendación del chef</h1>
                                      <h3 class="product-title">{{$banner->name}}</h3>
                                      @if(Auth::user() && Auth::user()->user_type == 1)
                                      <p class="py-1"><a href="{{url('menu')}}/{{$banner->id}}">Editar <i class="far fa-edit"></i></a></p>
                                      @endif
                                      <p class="lead">{{$banner->description}}</p>
                                      <p class="text-primary menu-price">$ {{$banner->price}}</p>
                                      <div class="input-group col-md-12 px-5 pb-2 text-center">
                                        <span data-id="{{$banner->id}}" class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                        <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                        <span data-id="{{$banner->id}}" class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                        <input type="hidden" class="price" value="{{$banner->price}}">
                                    </div>
                                    <p class="mb-0 pointer add-cart" data-id="{{$banner->id}}"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @php $count++; @endphp
                      @endforeach
                    @endif

                    @if(count($products['banners']))
                      @foreach($products['banners'] as $banner)
                        <div class="carousel-item product-detail-{{$banner->id}}" data-slide-number="{{$count}}">
                          <img class="first-slide product-img" src="{{url('platillos')}}/{{$banner->picture}}">
                          <div class="carousel-caption">
                              <div class="float-right col-lg-4">
                                  <div class="pricing-header bg-warning px-3 py-3 pt-md-5 pb-md-4">
                                      <h1 class="product-title">{{$banner->name}}</h1>
                                      @if(Auth::user() && Auth::user()->user_type == 1)
                                      <p class="py-1"><a href="{{url('menu')}}/{{$banner->id}}">Editar <i class="far fa-edit"></i></a></p>
                                      @endif
                                      <p class="lead">{{$banner->description}}</p>
                                      <p class="text-primary menu-price">$ {{$banner->price}}</p>
                                      <div class="input-group col-md-12 px-5 pb-2 text-center">
                                        <span data-id="{{$banner->id}}" class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                        <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                        <span data-id="{{$banner->id}}" class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                        <input type="hidden" class="price" value="{{$banner->price}}">
                                    </div>
                                    <p class="mb-0 pointer add-cart" data-id="{{$banner->id}}"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @php $count++; @endphp
                      @endforeach
                    @endif
                  </div>
                </div>
            </div>
        </div>
      </div>
</section>
@endif
    <!-- END section -->
    
    <!--<section class="ftco-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 ftco-animate mb-5">
            <h4 class="ftco-sub-title">Our Story</h4>
            <h2 class="ftco-primary-title display-4">Welcome</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p><a href="#" class="btn btn-secondary btn-lg">Our Story</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
            <img src="images/about_img_1.jpg" alt="Free Template by Free-Template.co">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    @include('dashboard.menu')

    @if(count($products['combos']))
    <section class="ftco-section" id="section-combos">
      <div class="container">
        <div class="row">
          
        <div class="col-md-12 text-center mb-5 ftco-animate">
            <h4 class="display-4">Combos</h4>
            <!--<h2 class="display-4">Offers &amp; Promos</h2>-->
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Para compartir</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-12">
          
          <div class="owl-carousel ftco-owl">
          @foreach($products['combos'] as $dish)
              <div class="item product-detail-{{$dish->id}}">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="{{url('platillos')}}/{{$dish->picture}}" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">${{$dish->price}}</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span data-id="{{$dish->id}}" class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span data-id="{{$dish->id}}" class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="{{$dish->price}}">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">{{$dish->name}}</h5>
                    @if(Auth::user() && Auth::user()->user_type == 1)
                      <p class="py-1"><a href="{{url('menu')}}/{{$dish->id}}">Editar <i class="far fa-edit"></i></a></p>
                    @endif
                    <p class="mb-2">{{$dish->description}}</p>
                    <p class="mb-0 pointer add-cart" data-id="{{$dish->id}}"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>    
        </div>
      </div>
    </section>
    <!-- END section -->
  @endif
  @if(count($products['suggestions']))
    <section class="ftco-section bg-light" id="section-sugerencias">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h4 class="display-4">Sugerencias</h4>
            <!--<h2 class="display-4">Offers &amp; Promos</h2>-->
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">¿No sabes qué elegir?</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel ftco-owl">

            @foreach($products['suggestions'] as $dish)
              <div class="item product-detail-{{$dish->id}}">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="{{url('platillos')}}/{{$dish->picture}}" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">${{$dish->price}}</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span data-id="{{$dish->id}}" class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span data-id="{{$dish->id}}" class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="{{$dish->price}}">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">{{$dish->name}}</h5>
                    @if(Auth::user() && Auth::user()->user_type == 1)
                      <p class="py-1"><a href="{{url('menu')}}/{{$dish->id}}">Editar <i class="far fa-edit"></i></a></p>
                    @endif
                    <p class="mb-2">{{$dish->description}}</p>
                    <p class="mb-0 pointer add-cart" data-id="{{$dish->id}}"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
          
        </div>
      </div>
    </section>
    @endif
    <!-- END section -->
    @guest
        @include('dashboard.contact')
    @endguest

    @if(Auth::user() && Auth::user()->user_type == 4)
        @include('dashboard.contact')
    @endif
    <!-- END section -->
@endsection
@section('scripts')

@endsection