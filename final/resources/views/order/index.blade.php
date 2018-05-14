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
                        <th scope="col">#Orden</th>
                        <th scope="col">Status</th>
                        <th scope="col">Entrega</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Confirmar status</th>
                        </tr>
                    </thead>
                    <tbody id="OrdersTableBody">
                    @if(count($orders))
                        @foreach($orders as $order)
                        <form class="updateOrderNow" method="POST">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PUT">
                        <tr>
                            <td><a class="text-secondary" data-toggle="collapse" href="#c-{{$order->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +
                                </a></td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->statusLabel}}
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
                            <td scope"col">
                            @if($order->time == null)
                                    @if(Auth::user()->user_type != 3)
                                    Pendiente
                                    @else   
                                        Tiempo de entrega: <input type="text" name="time" class="text-center form-control m_time" id="m_time">
                                        <small class="text-danger time_error feedback d-none"></small>
                                    
                                    @endif
                                @else
                                    {{$order->time}}
                                @endif
                            </td>
                            <td>
                                <a class="text-secondary" href="{{url('pedidos')}}/{{$order->id}}">
                                    Ver detalle
                                </a>
                            </td>
                            <td>
                                @if($order->status == 1)
                                <div class="form-group">
                                <div class="col-sm-10">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input name="status" value="2" class="form-check-input" type="checkbox"> Orden en proceso
                                    </label>
                                  </div>
                                </div>
                              </div>
                                @elseif($order->status == 2)
                                <div class="form-group">
                                <div class="col-sm-10">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input value="3" name="status" class="form-check-input" type="checkbox"> Orden terminada
                                    </label>
                                  </div>
                                </div>
                              </div>
                                @endif 
                            </td>
                            <td>
                                
                            </td>
                            
                            
                            </tr>
                            </form>
                            <tr class="collapse detail" id="c-{{$order->id}}">
                            <td class="align-middle text-center" colspan="6">

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

        @if(Auth::user()->user_type == 3)
        $('.form-check-input').on('click', function(e){
            var url = "{{url('pedidos')}}/"+$(this).attr('data-id');
            console.log(url);
            saveForm($('.updateOrderNow'), url, 4);
            $(this).closest('form').submit();
        });
        @endif
});

</script>
@endsection  