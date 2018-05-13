
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

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
      

    <!--<nav class="navbar fixed-top navbar-expand-sm pb-0 navbar-light">
        <div class="container">
            <a class="navbar-brand mr-5 mb-0" href="#">vMenú</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active" id="inicio">
                    <a href="#" class="nav-link">INICIO</a>
                </li>
                
                <li class="nav-item" id="cuenta">
                    <a href="#" class="nav-link">MENÚ</a>
                </li>


                <li class="materias nav-item dropdown">
                    <a class="nav-link" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CUENTA </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown10">
                    <a class="dropdown-item" href="#">PEDIDOS</a>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SALIR</a>          
                    <form id="logout-form" action="#" method="POST" style="display: none;">@csrf</form> 
                    </div>
                </li>
                
                <li class="nav-item" id="cart">
                    <a href="#" class="nav-link"></a>
                </li>

                </ul>
            </div>
        </div>
    </nav>-->

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Hotel Posada de Tampico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menú</a></li>
            <li class="nav-item"><a href="#section-combos" class="nav-link">Combos </a></li>
            <li class="nav-item"><a href="#section-sugerencias" class="nav-link">Sugerencias</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Órdenes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Cuenta</a>
              <a class="dropdown-item" href="#">Historial</a>
            </div>
          </li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contacto</a></li>
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
  </body>
</html>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
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
@yield('scripts')
    