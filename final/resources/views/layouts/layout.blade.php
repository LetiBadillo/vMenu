
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> vMenu </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    

    
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  </head>

  <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Hotel Posada de Tampico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item hidden-element active"><a href="#section-home" class="nav-link">Inicio</a></li>
            <li class="nav-item hidden-element"><a href="#section-menu" class="nav-link">Menú</a></li>
            <li class="nav-item hidden-element"><a href="#section-combos" class="nav-link">Combos </a></li>
            <li class="nav-item hidden-element"><a href="#section-sugerencias" class="nav-link">Sugerencias</a></li>
            @if(Auth::user())
                @if(Auth::user()->user_type == 4)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Estado de cuenta</a>
                            <a class="dropdown-item" href="#">Pedidos</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>          
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form> 
                        </div>
                    </li>
                    <li class="nav-item"><a href="#section-contact" class="nav-link">Contacto</a></li>            
                @elseif(Auth::user()->user_type == 1)
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Panel de administración</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{url('menu')}}">Productos/Combos</a>
                            <a class="dropdown-item" href="#">Reportes</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>          
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form> 
                        </div>
                    </li> 
                @endif
            @else
                <li class="nav-item"><a href="{{url('login')}}" class="nav-link">Iniciar sesión</a></li>
            @endif
            @guest
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contacto</a></li>            
            @endguest
            <li class="nav-item"><a class="nav-link text-danger pull-xs-right" id="navbarSideButton">
                <i class="fa fa-shopping-cart text-danger "></i>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <ul class="navbar-side" id="navbarSide">
        <form action="">
            <li class="navbar-side-item px-2">                
            <a href="#" class="side-link pl-3 overlay text-left"><i class="fas fa-times"></i></a>
            <br>    
            <p class="text-center">Orden de compra <i class="fa fa-shopping-cart text-danger"></i></p>
            </li>     
            
            <li id="total-li" class="d-none navbar-side-item px-2 py-3 text-center">
            <div class="media menu-item">
                      <div class="media-body">
                        <h5 id="order_total" class="mt-0"></h5>
                        <input type="hidden" class="order_total" name="total">
                        <button type="submit" class="btn btn-default btn-block">Hacer pedido</button>
                      </div>
            </li>
            <!-- insert more side-items if you so choose -->
        </form>
    </ul>
    <!-- END nav -->

      @yield('content')

      
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
                <h1 class="mb-4 modal-main-title"></h1> 
                <div class="modal_content"></div> 
                <div class="modal_footer">
                    <div class="row">
                        <div class="col-md-12 text-center" id="modal_footer_buttons">
                        </div>
                    </div>
                </div> 
                <!--<form class="" action="#" method="post">
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

                </form>-->
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    

    <!-- END Modal -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  </body>
</html>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>

<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script>
$( document ).ready(function() {
    // Open navbarSide when button is clicked
    $('#navbarSideButton').on('click', function() {
        $('#navbarSide').addClass('reveal');
        $('.overlay').show();
      });
      
      // Close navbarSide when the outside of menu is clicked
      $('.overlay').on('click', function(){
        $('#navbarSide').removeClass('reveal');
        $('.overlay').hide();
        return false;
      });

});
</script>
<script>

$(function() {

    minusFunction($('.minus'), 1);
    plus($('.plus'), 1);
    

    $('.add-cart').on('click', function(e){
        $('#total-li').show().removeClass('d-none');
        var find_input = $('#navbarSide').find('.order-product-detail-'+$(this).attr('data-id'));
        var element = $(this).closest('.product-detail-'+$(this).attr('data-id'))[0];
        var price = parseFloat($(element).find('.price').val())*parseFloat($(element).find('.quantity_input').val());
        if(find_input.length == 0){
            var content = '<li class="navbar-side-item px-3 pt-2 py-0 order-product-detail-'+$(this).attr('data-id')+'">\
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

    @if(Auth::user() && Auth::user()->user_type == 1)
        var url_save_dish = "{{url('/menu')}}";
            $('#add_dish').on('click', function(e){
                e.preventDefault();
                $('.modal-main-title').html('Agregar nuevo platillo');
                $('.modal_content').html('<form id="dishForm" action="#" method="post" enctype="multipart/form-data">{{ csrf_field() }}\
                  <div class="row">\
                    <div class="col-md-12 form-group">\
                      <label for="m_fname">Nombre</label>\
                      <small class="text-danger name_error feedback d-none"></small>\
                      <input type="text" name="name" class="form-control" id="m_fname">\
                    </div>\
                    <div class="col-md-12 form-group">\
                      <label for="m_lname">Descripción</label>\
                      <small class="text-danger description_error feedback d-none"></small>\
                      <textarea class="form-control" id="m_message" name="description" cols="5" rows="3"></textarea>\
                    </div>\
                  </div>\
                  <div class="row">\
                    <div class="col-md-12 form-group">\
                      <label for="m_people">Imagen</label>\
                      <small class="text-danger picture_error feedback d-none"></small>\
                      <input type="file" accept="image/*" class="form-control" name="picture">\
                    </div>\
                    <div class="col-md-6 form-group">\
                      <label for="m_fname">Precio</label>\
                      <small class="text-danger price_error feedback d-none"></small>\
                      <input type="numeric" step=".01" name="price" class="form-control" id="m_fname">\
                    </div>\
                    <div class="col-md-6 form-group">\
                      <label for="m_people">Tipo</label>\
                      <small class="text-danger type_error feedback d-none"></small>\
                      <select name="type" id="m_people" class="form-control">\
                        <option value=""> --Selecionar --</option>\
                        <option value="1">Desayuno </option>\
                        <option value="2">Comida </option>\
                        <option value="3"> Cena </option>\
                        <option value="4"> Postre</option>\
                        <option value="5"> Bebida</option>\
                        <option value="6"> Combo</option>\
                      </select>\
                  </div>\
                  </div>\
                  <div class="row">\
                  <div class="col-md-6 form-group">\
                      <label for="m_people">Destacar como</label>\
                      <small class="text-danger is_featured_error feedback d-none"></small>\
                      <select name="is_featured" id="m_people" name="is_featured" class="form-control">\
                        <option value=""> --Selecionar --</option>\
                        <option value=""> No destacar</option>\
                        <option value="7">Platillo del día </option>\
                        <option value="8"> Recomendación del Chef </option>\
                        <option value="10"> Banner</option>\
                      </select>\
                  </div>\
                  <div class="col-md-6 form-group">\
                  <label style="color: white !important;" for="m_people">Destacar como</label>\
                  <button type="submit" style="border: 1px solid #F96D00 !important; background-color: #F96D00 !important; color: white !important;" class="btn btn-primary form-control">Guardar</button>\
                  </div>\
                  </div>\
                </form>');
                $('#reservationModal').modal('show');
                saveAjax($('#dishForm'), url_save_dish, 3);
            });
        @endif

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
@yield('scripts')
    