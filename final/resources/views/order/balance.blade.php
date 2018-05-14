@extends('layouts.layout')
@section('content')
<section class="ftco-section pb-0">
      <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
    <li class="breadcrumb-item">Estado de cuenta</li>
  </ol>
</nav>
</div>
</section>

<section class="ftco-section pt-0">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-2 ftco-animate">
                <h2 class="display-4">Estado de Cuenta</h2>
                @php $total = 0;
                if(count($orders)){
                        foreach($orders as $order){
                            $total += $order->total;
                        }
                    }
                @endphp
                <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead"> Total: ${{$total}}</p>
              </div>
            </div>
            </div>

            <div class="col-md-12 text-center text-dark">
                <table class="table results table-hover bg-light">
                    <thead>
                        <tr>
                        <th scope="col">+</th>
                        <th scope="col">#Orden</th>
                        <th scope="col">Total</th>
                        <th scope="col">Detalle</th>
                        </tr>
                    </thead>
                    <tbody id="OrdersTableBody">
                    @if(count($orders))
                        @foreach($orders as $order)
                        <tr>
                            <td><a class="text-secondary" data-toggle="collapse" href="#c-{{$order->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +
                                </a></td>
                            <td>{{$order->id}}</td>
                            <td>${{$order->total}}
                            @if($order->status == 1)
                                        <div class="progress">
                                            <div class="progress-bar bg-danger progress-bar-striped" style="width:10%"></div>
                                        </div>
                                    @elseif($order->status == 2)
                                        <div class="progress">
                                            <div class="progress-bar bg-warning progress-bar-striped" style="width:60%"></div>
                                        </div>
                                    @elseif($order->status == 3)
                                        <div class="progress">
                                            <div class="progress-bar bg-success progress-bar-striped" style="width:100%"></div>
                                        </div>
                                    @endif 
                            </td>
                            <td>{{$order->time}}</td>
                            <td>
                                <a class="text-secondary" href="{{url('pedidos')}}/{{$order->id}}">
                                    Ver detalle
                                </a>
                            </td>
                            <td>
                                
                            </td>
                            
                            
                            </tr>
                            <tr class="collapse detail" id="c-{{$order->id}}">
                            <td class="align-middle text-center" colspan="5">

                                @if(count($order->order_detail))                                    
                                    <br>
                                    @foreach($order->order_detail as $product)
                                    <div class="media menu-item product-detail-{{$product->id}}">
                                        <div class="media-body">
                                            <h5 class="mt-0 product-title">{{$product->product->name}}</h5>
                                            <h6 class="text-primary menu-price">${{$product->price}}</h6>
                                            <br>
                                                Cantidad : {{$product->quantity}}
                                                <br>
                                                Notas: {{$product->notes}}
                                        </div>
                                        </div>
                                    @endforeach
                                @endif
                                <hr>
                                <h4 class="text-dark">Total: {{$order->total}} </h4>
                                <br>
                            </td>
                        </tr>
                        @endforeach                
                    @else
                    <tr>
                    <td colspan="3" class="text-center">Aún no hay materias registradas</td>
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