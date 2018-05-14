@extends('layouts.layout')
@section('content')
<section class="ftco-section pb-0">
      <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
    <li class="breadcrumb-item">Historial</li>
  </ol>
</nav>
</div>
</section>

<section class="ftco-section pt-0">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-2 ftco-animate">
                <h2 class="display-4">Historial</h2>
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
<script>


$(function() {
        
    $('.hidden-element').addClass('d-none').hide();                       
});

</script>
@endsection  