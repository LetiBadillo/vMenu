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
                        @if(Auth::user()->user_type == 3)
                        <th scope="col">Confirmar status</th>
                        @endif
                        </tr>
                    </thead>
                    <tbody id="OrdersTableBody">
                    @if(count($orders))
                        @foreach($orders as $order)
                        <tr class="finding-tr-{{$order->id}}">
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
                                    @if($order->status == 3)
                                        {{$order->updated_at->diffForHumans()}}
                                    @else
                                        Pendiente
                                    @endif
                                    @else   
                                        Tiempo de entrega: <input type="text" name="time" class="text-center form-control m_time">
                                        <small class="text-danger time_error feedback d-none"></small>
                                    
                                    @endif
                                @else
                                    {{$order->timeFormat}}
                                
                                @endif
                            </td>
                            @if(Auth::user()->user_type == 3)
                            <td>
                                @if($order->status == 1)
                                <div class="form-group">
                                <div class="col-sm-10">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input name="status" data-id="{{$order->id}}" value="2" class="form-check-input" type="checkbox"> Orden en proceso
                                    </label>
                                  </div>
                                </div>
                              </div>
                                @elseif($order->status == 2)
                                <div class="form-group">
                                <div class="col-sm-10">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input value="3" data-id="{{$order->id}}" name="status" class="form-check-input" type="checkbox"> Orden terminada
                                    </label>
                                  </div>
                                </div>
                              </div>
                                @endif 
                            </td>
                            @endif
                            <td>
                                <a class="text-secondary" href="{{url('pedidos')}}/{{$order->id}}">
                                    Ver detalle
                                </a>
                            </td>
                            </tr>
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
                    <td colspan="3" class="text-center">Sin elementos para mostrar</td>
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
        update();
        function update(){
            $('.form-check-input').on('click', function(e){
            var url = "{{url('pedidos')}}/"+$(this).attr('data-id');
            var finder = $(".finding-tr-"+$(this).attr('data-id'));
            var time = $(finder).find('.m_time').val();

            hide($('.feedback'));
            var form = new FormData();
            form.append('_method', 'PUT');
            form.append('_token', "{{ csrf_token() }}");
            if(time){
                time = time.substring(0, time.length-2);
                form.append('time', time);
            }
            form.append('status', $(this).val());
            $.ajax({
                url: url,
                type: 'POST',
                dataType: "JSON",
                data: form,
                processData: false,
                contentType: false,
                success: function (data){
                    responses(data, 4);
                },
                error: function (data){
                    getErrors(data);  
                }
            });
        });
        }
       
        window.setInterval(function(){
            console.log('vauna');
            getData();
            }, 15000);
        function getData(){
            $.get('{{url("pedidos")}}?ws=onlyusers', function(data){
                $('#OrdersTableBody').html(getTable(data));
                update();
                $('.m_time').timepicker({ 'step': 15 });
            });
        }
        function getTable(data){
            console.log('data: ');
            console.log(data);
            var content = '<tr>';
            if(data.length == 0){
            content = '<td colspan="6" class="text-center">No hay órdenes</td>\
            </tr>';
            }else{
            $.each(data, function(key,value){
                content += '<tr class="finding-tr-'+value.id+'">\
                <td><a class="text-secondary" data-toggle="collapse" href="#c-'+value.id+'" role="button" aria-expanded="false" aria-controls="collapseExample">+</a></td>\
                <td>'+value.id+'</td>\
                <td>';
                        if(value.status == 1){
                            content +='<div class="progress">\
                            <div class="progress-bar bg-danger progress-bar-striped" style="width:10%"></div>\
                                </div>';
                        }
                        if(value.status == 2){
                            content += '<div class="progress">\
                            <div class="progress-bar bg-warning progress-bar-striped" style="width:60%"></div>\</div>';
                        }
                        if(value.status == 3){
                            content+= '<div class="progress">\
                            <div class="progress-bar bg-success progress-bar-striped" style="width:100%"></div>\
                            </div>';
                        }
                content += '</td>\
                <td scope"col">';
                if(value.time == null){
                        if({{Auth::user()->user_type}} != 3){
                            content += 'Pendiente';
                        }else{
                            content += 'Tiempo de entrega: <input type="text" name="time" class="text-center form-control m_time">\
                            <small class="text-danger time_error feedback d-none"></small>';
                        }
                }else{
                        content+= value.timeFormat;
                }
                content+='</td>\
                <td>';
                    if(value.status == 1){
                        content+='<div class="form-group">\
                        <div class="col-sm-10">\
                        <div class="form-check">\
                            <label class="form-check-label">\
                            <input name="status" data-id="'+value.id+'" value="2" class="form-check-input" type="checkbox"> Orden en proceso\
                            </label>\
                        </div>\
                        </div>\
                    </div>';
                    }
                    if(value.status == 2){
                        content+='<div class="form-group">\
                        <div class="col-sm-10">\
                        <div class="form-check">\
                        <label class="form-check-label">\
                        <input value="3" data-id="'+value.id+'" name="status" class="form-check-input" type="checkbox"> Orden terminada\</label>\
                        </div>\
                        </div>\
                        </div>';
                    }
                    
                content+= '</td>\
                <td>\
                    <a class="text-secondary" href="{{url("pedidos")}}/'+value.id+'">\
                        Ver detalle\
                    </a>\
                </td>\
                </tr>\
                <tr class="collapse detail" id="c-'+value.id+'">\
                <td class="align-middle text-center" colspan="6"><br>';
                    $.each(value.order_detail, function(k,v){
                        content += '<div class="media menu-item product-detail-'+v.id+'">\
                            <div class="media-body">\
                                <h5 class="mt-0 product-title">'+v.name+'</h5>\
                                <h6 class="text-primary menu-price">$'+v.price+'</h6>\
                                <br>\
                                    Cantidad : '+v.price+'\
                                    <br>\
                                    Notas: '+v.notes+'\
                            </div>\
                            </div>';
                    });
                    content +='<hr>\
                    <h4 class="text-dark">Total: '+value.total+' </h4>\
                    <br>\
                </td>\
            </tr>';
            });
            }
            
            return content;
            }
            @endif
        
                       
});

</script>
@endsection  