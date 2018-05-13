<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <title>Hospital APD</title>
    </head>
    <body>
        <nav class="navbar navbar-light sticky-top flex-md-nowrap p-2" style="background-color: #e3f2fd;">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('/')}}">Hospital APD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-md-block bg-light sidebar">
                <div class="navbar-collapse sidebar-sticky" id="navbarTogglerDemo01">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="inicio nav-link" href="{{url('/')}}" >
                                Inicio 
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link paciente" data-toggle="collapse" href="#collapsePacientes" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Pacientes
                                <span class="dropdown-toggle"></span>
                            </a>
                            <div style="margin-top: 0;" class="collapse ml-3" id="collapsePacientes">
                                <ul class="nav flex-column">
                                    <li class="nav-item"> 
                                    <a class="nav-link new_paciente" href="{{route('patients.create')}}" >
                                        + Nuevo paciente 
                                    </a>
                                    <a class="nav-link paciente_index" href="{{url('patients')}}" >
                                        + Ver todos 
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link consulta" data-toggle="collapse" href="#collapseConsultas" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Consultas
                            <span class="dropdown-toggle"></span>
                        </a>
                            <div style="margin-top: 0;" class="ml-3 collapse" id="collapseConsultas">
                                <ul class="nav flex-column">
                                    <li class="nav-item"> 
                                    <a class="nav-link new_consulta" href="{{route('consultations.create')}}" >
                                        + Nuevo consulta
                                    </a>
                                    <a class="nav-link consulta_index" href="{{url('consultations')}}" >
                                        + Historial de consultas 
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto bg-white col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
        </div>
    </div>
    </body>
</html>
<script> var patient = ''; </script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>

@yield('scripts')