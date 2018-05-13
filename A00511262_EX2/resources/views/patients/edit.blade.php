@extends('layouts.layout')
@section('content')
@include('partials.modal')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h4 class="h2"><a class="nav-item" href="{{url('patients')}}">Pacientes</a> / <a href="{{route('patients.show', ['id'=>$patient['id']])}}">{{$patient->name}} {{$patient->last_name}}</a> / Editar</h4>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="{{route('consultations.create')}}?patient={{$patient->id}}" class="btn btn-sm btn-outline-secondary">Realizar consulta &#10093</a>
            <form action="{{route('patients.destroy', ['id'=>$patient->id])}}" class="form{{$patient->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input name="id" type="hidden" value="{{$patient->id}}">
                    </form>
                    <button class="btn btn-sm btn-outline-danger ml-2 deleteForm" data-form="form{{$patient->id}}" type="button">Eliminar &#10093</button>
          </div>
        </div>
    </div>
    <form id="StorePatient">
    {{ csrf_field() }}
    <div style="display:none;" class="alert alert-success" role="alert">
    </div>
    <input type="hidden" name="_method" value="PUT">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">Nombres</label>
          <input type="text" class="form-control" id="firstName" value="{{$patient->name}}" name="name">
          <div class="name-feedback feedback">
            
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Apellidos</label>
          <input type="text" name="last_name" class="form-control" id="lastName" value="{{$patient->last_name}}" placeholder="" value="">
          <div class="last_name-feedback feedback">
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="email">Email <span class="text-muted">(opcional)</span></label>
          <input type="email" class="form-control" name="email" id="email" value="{{$patient->email}}" placeholder="name@example.com">
          <div class="email-feedback feedback">
          </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="age">Edad</label>
        <input type="number" class="form-control" value="{{$patient->age}}" id="age" name="age">
        <div class="age-feedback feedback">
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="weight">Peso</label>
        <input type="text" class="form-control" value="{{$patient->weight}}" name="weight" id="weight">
        <div class="weight-feedback feedback">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 mb-3">
        <label for="country">Tipo de Sangre</label>
        <select class="custom-select d-block w-100" id="bloodtype" name="bloodtype">
          <option value="">Elige una opción...</option>
          <option value="1">A+</option>
          <option value="2">A-</option>
          <option value="3">B+</option>
          <option value="4">B-</option>
          <option value="5">O+</option>
          <option value="6">O-</option>
          <option value="7">AB+</option>
          <option value="8">AB-</option>
        </select>
        <div class="bloodtype-feedback feedback">
        </div>
      </div>
      <div class="col-md-9 mb-3">
        <label for="zip">Alergias</label>
        <input type="text" class="form-control" value="{{$patient->alergies}}" name="alergies">
        <div class="alergies-feedback feedback">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3">
        <label for="chronic">Padecimientos crónicos</label>
        <input type="text" class="form-control" name="chronic" value="{{$patient->chronic}}" id="chronic">
        <div class="chronic-feedback feedback">
        </div>
      </div>
    </div>
    <hr class="mb-4">
    <h4 class="mb-3">Autoriza donar sus órganos</h4>
    <div class="d-block my-3">
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" name="donate" class="form-check-input"  @php if($patient->donate == 1) echo "checked"; @endphp value="1" checked>
          Sí
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" name="donate"  @php if($patient->donate == 0) echo "checked"; @endphp class="form-check-input" value="0">
          No
        </label>
      </div>
    </div>
    <hr class="mb-4">
    <button class="btn btn-lg btn-block btn-primary" type="submit"> Guardar </button>
  </form>
    
@endsection

@section('scripts')
<script>
    patient = {!! str_replace("'", "\'", json_encode($patient)) !!};
    $('.paciente').addClass('active');
    $('#bloodtype').val({{$patient->bloodtype}});
    $('#StorePatient').on('submit', function(e){
      e.preventDefault();
      var data = new FormData($(this)[0]);
      $.ajax({
				url:"{{route('patients.update', ['id'=>$patient->id])}}",
				type:'POST',
        data: data,
				contentType:false,
				processData:false,
				success : function(data){
					$('.alert').text(data).show();
				},
				error:function(data){						
					$.each(data.responseJSON, function(k,v){
						console.log(k);
            console.log(v);
					});
				}

			});
    });
</script>
@endsection