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
    

    <section class="ftco-section bg-light" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="display-4">Menú</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead"> Ordene desde la comodidad de su cuarto.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item ftco-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Desayuno</a>
              </li>
              <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Comida</a>
              </li>
              <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Cena</a>
              </li>
              <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-desserts-tab" data-toggle="pill" href="#pills-desserts" role="tab" aria-controls="pills-dinner" aria-selected="false">Postres</a>
              </li>
              <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-drinks-tab" data-toggle="pill" href="#pills-drinks" role="tab" aria-controls="pills-dinner" aria-selected="false">Bebidas</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">
                    <div class="media menu-item" id="product-detail-1">
                      <img class="mr-3 product-img img-fluid" src="images/menu_1.jpg" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0 product-title">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                        <input type="hidden" class="price" value="35.50">
                        <div class="col-md-4 pl-0 mb-1">
                            <div class="input-group">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                            </div>
                        </div>
                        <p class="add-cart pointer" data-id="1">Añadir al carrito <i class="fa fa-shopping-cart text-danger "></i></p>
                      </div>
                    </div>

                    <div class="media menu-item" id="product-detail-2">
                      <img class="mr-3 product-img img-fluid" src="images/menu_2.jpg" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0 product-title">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$24.50</h6>
                        <input type="hidden" class="price" value="24.5">
                        <div class="col-md-4 pl-0 mb-1">
                            <div class="input-group">
                                <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                            </div>
                        </div>
                        <p class="add-cart pointer" data-id="2">Añadir al carrito <i class="fa fa-shopping-cart text-danger "></i></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$14.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$12.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$18.50</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$14.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$24.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$18.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$12.50</h6>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$24.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$14.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$18.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$12.50</h6>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="pills-desserts" role="tabpanel" aria-labelledby="pills-desserts-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce dessertsS</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$24.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$14.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$18.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$12.50</h6>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>


              <div class="tab-pane fade" id="pills-drinks" role="tabpanel" aria-labelledby="pills-drinks-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce DRINKS</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$24.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$14.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$18.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$12.50</h6>
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

    <section class="ftco-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="display-4"> Contacto </h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead"> ¿Disfrutaste del servicio? </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-5 ftco-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="message" class="sr-only">Mensaje</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Enviar mensaje">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->
    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md ftco-animate">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Hotel Posada de Tampico</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Inicio</a></li>
                    <li><a href="#" class="py-2 d-block">Menu</a></li>
                    <li><a href="#" class="py-2 d-block">Combos</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md ftco-animate">
                 <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2"></h2>
                  <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Sugerencias</a></li>
                  <li><a href="#" class="py-2 d-block">Eventos</a></li>
                  <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md text-left">
            <p>&copy; Hotel posada de Tampico - 2018. Laboratorio de Desarrollo Web. </p>
          </div>
        </div>
      </div>
    </footer>

    
    

    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);"></div>
              <div class="col-lg-8 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Reserve A Table</h1>  
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">First Name</label>
                      <input type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Last Name</label>
                      <input type="text" class="form-control" id="m_lname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">How Many People</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4+">4+ People</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Date</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Time</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Message</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
@endsection
@section('scripts')
<script>

$(function() {

    minusFunction($('.minus'), 1);
    plus($('.plus'), 1);

    $('.add-cart').on('click', function(e){
        $('#total-li').show().removeClass('d-none');
        var find_input = $('#navbarSide').find('.order-product-detail-'+$(this).attr('data-id'));
        var element = $('#product-detail-'+$(this).attr('data-id'));
        var price = parseFloat($(element).find('.price').val())*parseFloat($(element).find('.quantity_input').val());
        if(find_input.length == 0){
            var content = '<li class="navbar-side-item px-3 pt-2 -0 order-product-detail-'+$(this).attr('data-id')+'">\
            <div class="media menu-item">\
                      <img class="mr-3 product-img img-fluid" src="'+$(element).find('.product-img').attr('src')+'">\
                      <div class="media-body">\
                        <h5 class="mt-0 product-title">'+$(element).find('.product-title').text()+'</h5>\
                        <h6 class="text-primary menu-price"> $'+price+'</h6>\
                        <input type="hidden" class="unit_price" value="'+$(element).find('.price').val()+'">\
                        <input type="hidden" name="product_total[]" class="actual_price" value="'+price+'">\
                        <div class="pl-0 mb-0">\
                            <div class="input-group">\
                                <span class="plus-c input-group-addon"><i class="fas bg-light fa-plus"></i></span>\
                                <input type="number" name="quantity[]" class="quantity_input form-control form-control-sm text-right" value="'+$(element).find('.quantity_input').val()+'" >\
                                <span class="minus-c bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>\
                            </div>\
                            <label for="note">Especificaciones</label>\
                            <br>\
                            <small class="text-muted">(Sin mayonesa, sin hielo, etc.)</small>\
                            <input type="text" name="note[]" class="form-control form-control-sm">\
                            <input type="hidden" name="product_id[]" value="'+$(this).attr('data-id')+'" class="form-control form-control-sm">\
                        </div>\
                      </div>\
            </li>';

        /**Solo aumentar la cantidad en el carrito si se repite */
        $('#total-li').before(content);
        minusFunction($('.minus-c'), 2);
        plus($('.plus-c'), 2);
        }else{
            var quantity = parseInt($(element).find('.quantity_input').val(), 10) + parseInt($(find_input).find('.quantity_input').val(), 10);
            price = parseFloat($(find_input).find('.unit_price').val())*quantity;
            var input = $(find_input).find('.quantity_input');
            input.val(quantity);
            $(find_input).find('.menu-price').text('$'+price);
            $(find_input).find('.actual_price').val(price);
        }
        var total = getTotal();
        $('#order_total').text('Total: $'+total);
        $('.order_total').val(total);

    });
});

    function plus(input, type){
        $(input).on('click', function(e){
        var input = $(this).closest('.input-group').find('.quantity_input');
        input.val(parseInt($(input).val(), 10) +1);
            if(type == 2){
                var element =  $(this).closest('li');
                var price = parseFloat($(element).find('.unit_price').val())*$(input).val();
                $(element).find('.menu-price').text('$'+price);
                $(element).find('.actual_price').val(price);
                var total = getTotal();
                $('#order_total').text('Total: $'+total);
                $('.order_total').val(total);
            }
        
       });
    }

    
    function getTotal(){
        var total = 0;
            $('.actual_price').each(function(){
            total += parseFloat($(this).val());
        });
        return total;
    }
    function minusFunction(input, type){
        $(input).on('click', function(e){
        var input = $(this).closest('.input-group').find('.quantity_input')
        var number = parseInt($(input).val(), 10);
        if(number > 0){
            number--;
        }
        
        input.val(number);
        if(type == 2){
            var element =  $(this).closest('li');
            if(number == 0){
                element.remove();
                
                if($('.actual_price').length == 0){
                    $('#total-li').addClass('d-none').hide();
                }
            }else{
                price = parseFloat($(element).find('.unit_price').val())*$(input).val();
                $(element).find('.menu-price').text('$'+price);
                $(element).find('.actual_price').val(price);
            }

            var total = getTotal();
                $('#order_total').text('Total: $'+total);
                $('.order_total').val(total);
            
        }
    });
    }

</script>
@endsection