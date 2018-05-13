@extends('layouts.layout')
@section('content')
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
                    <div class="carousel-item active" data-slide-number="0">
                        <img class="first-slide" src="{{asset('images/food1.jpg')}}">
                        <div class="carousel-caption">
                            <div class="float-right col-lg-4">
                                <div class="pricing-header bg-warning px-3 py-3 pt-md-5 pb-md-4">
                                    <h1>Platillo del día</h1>
                                    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default.</p>
                                    <small>*La comida del día incluye sopa de entrada, bebida y postre*</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-slide-number="1">
                        <img class="second-slide" src="{{asset('images/food2.jpg')}}" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="float-right col-lg-4">
                                <div class="pricing-header bg-warning px-3 py-3 pt-md-5 pb-md-4">
                                    <h1>Recomendación del chef</h1>
                                    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default.</p>
                                    <small>*La comida del día incluye sopa de entrada, bebida y postre*</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-slide-number="2">
                        <img class="third-slide" src="{{asset('images/food3.jpg')}}" alt="Third slide">
                        <div class="carousel-caption">
                            <div class="float-right col-lg-4">
                                <div class="pricing-header bg-warning px-3 py-3 pt-md-5 pb-md-4">
                                    <h1>El favorito de los clientes</h1>
                                    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default.</p>
                                    <small>*La comida del día incluye sopa de entrada, bebida y postre*</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
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

              <div class="item" id="product-detail-7">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="7"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>

              <div class="item" id="product-detail-8">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="8"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-9">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="9"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-10">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="10"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-11">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="11"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-12">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="12"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-13">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="13"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-14">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="14"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-15">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="15"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->


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

            <div class="item" id="product-detail-7">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="7"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>

              <div class="item" id="product-detail-8">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="8"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-9">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="9"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-10">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="10"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-11">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="11"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-12">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="12"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-13">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="13"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-14">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="14"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>
              <div class="item" id="product-detail-15">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                  <img src="images/offer_1.jpg" class="img-fluid product-img">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary menu-price">$39.50</h5>
                    <div class="col-md-12 px-5 py-1 pl-0 mb-1">
                            <div class="input-group text-center">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                <input type="hidden" class="price" value="39.50">
                            </div>
                    </div>
                    <h5 class="mt-0 h4 product-title">Beef with Sauce</h5>
                    <p class="mb-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0 pointer add-cart" data-id="15"><a class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart text-light "></i></a></p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->



    <!--<section class="ftco-section" id="section-events">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="display-4">Eventos</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Disfruta de espectáculos y música en vivo. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center ftco-media ftco-animate">
              <img src="images/offer_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">In Taste Restaurant</h5>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center ftco-media ftco-animate">
              <img src="images/offer_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Chef Special Menu</h5>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center ftco-media ftco-animate">
              <img src="images/offer_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Merriage Celebrations</h5>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <!--<section class="ftco-section" id="section-gallery">
      <div class="container">
        <div class="row ftco-custom-gutters">

          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="display-4">Food Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
              <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>

          <div class="col-md-4 ftco-animate">
            <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
              <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!END section -->
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