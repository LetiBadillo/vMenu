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
                <a class="nav-link" id="pills-desserts-tab" data-toggle="pill" href="#pills-desserts" role="tab" aria-controls="pills-desserts" aria-selected="false">Postres</a>
              </li>
              <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-drinks-tab" data-toggle="pill" href="#pills-drinks" role="tab" aria-controls="pills-drinks" aria-selected="false">Bebidas</a>
              </li>

              @if(Auth::user() && Auth::user()->user_type == 1)
                @if(count($products['with_combos']))
                <li class="nav-item ftco-animate">
                  <a class="nav-link" id="pills-with_combos-tab" data-toggle="pill" href="#pills-with_combos" role="tab" aria-controls="pills-with_combos" aria-selected="false">Combos</a>
                </li>
                @endif
              <li class="nav-item ftco-animate">
                <a class="nav-link" href="#" id="add_dish">Agregar <i class="fas fa-plus"></i></a>
              </li>
              @endif
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  @if(count($products['breakfast']))
                    @foreach($products['breakfast'] as $dish)
                      <div class="col-md-6 ftco-animate">
                        <div class="media menu-item product-detail-{{$dish->id}}">
                          <img class="mr-3 product-img img-fluid" src="{{url('platillos')}}/{{$dish->picture}}">
                          <div class="media-body">
                            <h5 class="mt-0 product-title">{{$dish->name}}</h5>
                            @if(Auth::user() && Auth::user()->user_type == 1)
                            <p class="py-1"><a href="{{url('menu')}}/{{$dish->id}}">Editar <i class="far fa-edit"></i></a></p>
                            @endif
                            <p>{{$dish->description}}</p>
                            <h6 class="text-primary menu-price">${{$dish->price}}</h6>
                            <input type="hidden" class="price" value="{{$dish->price}}">
                            <div class="col-md-4 pl-0 mb-1">
                                <div class="input-group">
                                    <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                    <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                    <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                </div>
                            </div>
                            <p class="add-cart pointer" data-id="{{$dish->id}}">Añadir al carrito <i class="fa fa-shopping-cart text-danger "></i></p>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  @endif
                </div> <!--end tab-pane-->
              </div> <!--end row -->
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  @if(count($products['lunch']))
                      @foreach($products['lunch'] as $dish)
                        <div class="col-md-6 ftco-animate">
                          <div class="media menu-item product-detail-{{$dish->id}}">
                            <img class="mr-3 product-img img-fluid" src="{{url('platillos')}}/{{$dish->picture}}">
                            <div class="media-body">
                              <h5 class="mt-0 product-title">{{$dish->name}}</h5>
                              @if(Auth::user() && Auth::user()->user_type == 1)
                              <p class="py-1"><a href="{{url('menu')}}/{{$dish->id}}">Editar <i class="far fa-edit"></i></a></p>
                              @endif
                              <p>{{$dish->description}}</p>
                              <h6 class="text-primary menu-price">${{$dish->price}}</h6>
                              <input type="hidden" class="price" value="{{$dish->price}}">
                              <div class="col-md-4 pl-0 mb-1">
                                  <div class="input-group">
                                      <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                      <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                      <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                  </div>
                              </div>
                              <p class="add-cart pointer" data-id="{{$dish->id}}">Añadir al carrito <i class="fa fa-shopping-cart text-danger "></i></p>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @endif
                </div>
              </div>

              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  @if(count($products['dinner']))
                      @foreach($products['dinner'] as $dish)
                        <div class="col-md-6 ftco-animate">
                          <div class="media menu-item product-detail-{{$dish->id}}">
                            <img class="mr-3 product-img img-fluid" src="{{url('platillos')}}/{{$dish->picture}}">
                            <div class="media-body">
                              <h5 class="mt-0 product-title">{{$dish->name}}</h5>
                              @if(Auth::user() && Auth::user()->user_type == 1)
                              <p class="py-1"><a href="{{url('menu')}}/{{$dish->id}}">Editar <i class="far fa-edit"></i></a></p>
                              @endif
                              <p>{{$dish->description}}</p>
                              <h6 class="text-primary menu-price">${{$dish->price}}</h6>
                              <input type="hidden" class="price" value="{{$dish->price}}">
                              <div class="col-md-4 pl-0 mb-1">
                                  <div class="input-group">
                                      <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                      <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                      <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                  </div>
                              </div>
                              <p class="add-cart pointer" data-id="{{$dish->id}}">Añadir al carrito <i class="fa fa-shopping-cart text-danger "></i></p>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @endif
                </div>
              </div>

              <div class="tab-pane fade" id="pills-desserts" role="tabpanel" aria-labelledby="pills-desserts-tab">
                <div class="row">
                  @if(count($products['desserts']))
                        @foreach($products['desserts'] as $dish)
                          <div class="col-md-6 ftco-animate">
                            <div class="media menu-item product-detail-{{$dish->id}}">
                              <img class="mr-3 product-img img-fluid" src="{{url('platillos')}}/{{$dish->picture}}">
                              <div class="media-body">
                                <h5 class="mt-0 product-title">{{$dish->name}}</h5>
                                @if(Auth::user() && Auth::user()->user_type == 1)
                                <p class="py-1"><a href="{{url('menu')}}/{{$dish->id}}">Editar <i class="far fa-edit"></i></a></p>
                                @endif
                                <p>{{$dish->description}}</p>
                                <h6 class="text-primary menu-price">${{$dish->price}}</h6>
                                <input type="hidden" class="price" value="{{$dish->price}}">
                                <div class="col-md-4 pl-0 mb-1">
                                    <div class="input-group">
                                        <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                        <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                        <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                    </div>
                                </div>
                                <p class="add-cart pointer" data-id="{{$dish->id}}">Añadir al carrito <i class="fa fa-shopping-cart text-danger "></i></p>
                              </div>
                            </div>
                          </div>
                      @endforeach
                    @endif
                </div>
              </div>


              <div class="tab-pane fade" id="pills-drinks" role="tabpanel" aria-labelledby="pills-drinks-tab">
                <div class="row">
                @if(count($products['drinks']))
                      @foreach($products['drinks'] as $dish)
                        <div class="col-md-6 ftco-animate">
                          <div class="media menu-item product-detail-{{$dish->id}}">
                            <img class="mr-3 product-img img-fluid" src="{{url('platillos')}}/{{$dish->picture}}">
                            <div class="media-body">
                              <h5 class="mt-0 product-title">{{$dish->name}}</h5>
                              @if(Auth::user() && Auth::user()->user_type == 1)
                              <p class="py-1"><a href="{{url('menu')}}/{{$dish->id}}">Editar <i class="far fa-edit"></i></a></p>
                              @endif
                              <p>{{$dish->description}}</p>
                              <h6 class="text-primary menu-price">${{$dish->price}}</h6>
                              <input type="hidden" class="price" value="{{$dish->price}}">
                              <div class="col-md-4 pl-0 mb-1">
                                  <div class="input-group">
                                      <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                      <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                      <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                  </div>
                              </div>
                              <p class="add-cart pointer" data-id="{{$dish->id}}">Añadir al carrito <i class="fa fa-shopping-cart text-danger "></i></p>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @endif
                </div>
              </div>

              <div class="tab-pane fade" id="pills-with_combos" role="tabpanel" aria-labelledby="pills-with_combos-tab">
                <div class="row">
                @if($products['with_combos'] && count($products['with_combos']))
                      @foreach($products['with_combos'] as $dish)
                        <div class="col-md-6 ftco-animate">
                          <div class="media menu-item product-detail-{{$dish->id}}">
                            <img class="mr-3 product-img img-fluid" src="{{url('platillos')}}/{{$dish->picture}}">
                            <div class="media-body">
                              <h5 class="mt-0 product-title">{{$dish->name}}</h5>
                              @if(Auth::user() && Auth::user()->user_type == 1)
                              <p class="py-1"><a href="{{url('menu')}}/{{$dish->id}}">Editar <i class="far fa-edit"></i></a></p>
                              @endif
                              <p>{{$dish->description}}</p>
                              <h6 class="text-primary menu-price">${{$dish->price}}</h6>
                              <input type="hidden" class="price" value="{{$dish->price}}">
                              <div class="col-md-4 pl-0 mb-1">
                                  <div class="input-group">
                                      <span class="plus input-group-addon"><i class="fas bg-light fa-plus"></i></span>
                                      <input type="number" class="quantity_input form-control form-control-sm text-right" value="1" >
                                      <span class="minus bg-light input-group-addon"><i id="minus" class="fas fa-minus bg-light"></i></span>
                                  </div>
                              </div>
                              <p class="add-cart pointer" data-id="{{$dish->id}}">Añadir al carrito <i class="fa fa-shopping-cart text-danger "></i></p>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @endif
                </div>
              </div>



            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
