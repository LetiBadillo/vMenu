@extends('layouts.layout')
@section('content')

@if(Auth::user()->user_type == 1)
<section class="ftco-section pb-0">
      <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
    <li class="breadcrumb-item">Reportes</li>
  </ol>
</nav>
</div>
</section>

<section class="ftco-section pt-0">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-2 ftco-animate">
                <h2 class="display-4">Actividad</h2>
            </div>

            <div class="col-md-12">
            <div id="container" class="p-4" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="ftco-section pt-0">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-2 ftco-animate">
                <h2 class="display-4">Historial de pedidos</h2>
            </div>

            <div class="col-md-12 text-center text-dark">
                <table class="table results table-hover bg-light">
                    <thead>
                        <tr>
                        <th scope="col">+</th>
                        <th scope="col">#Cuarto</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Detalle</th>
                        </tr>
                    </thead>
                    <tbody id="OrdersTableBody">
                    @if(count($users))
                        @foreach($users as $user)
                        <tr class="finding-tr-{{$user->id}}">
                            <td><a class="text-secondary" data-toggle="collapse" href="#c-{{$user->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +
                                </a></td>
                            <td>{{$user->room}}</td>
                            <td>${{$user->balance}}
                            <td><a class="text-secondary" href="{{url('pedidos')}}?ws=balance&user={{$user->id}}">
                        Ver detalle
                    </a></td>
                        </tr>
                        @endforeach                
                    @else
                    <tr>
                    <td colspan="3" class="text-center">Sin elementos para mostra</td>
                    </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

    <!-- END section -->
@endsection
@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>


$(function() {
        
    $('.hidden-element').addClass('d-none').hide();                       
    @if(Auth::user()->user_type == 1)
    
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['07:00AM - 10:00PM', '10:01PM:13:00PM', '13:01-16:00', '16:00-7:00PM'],
    },
    yAxis: {
        title: {
            text: 'Número de pedidos'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Pedidos',
        data: [7, 18, 13, 9]
    }, {
        name: 'Entregas',
        data: [5, 16, 12, 8]
    }]
});
    @endif
});

</script>
@endsection  