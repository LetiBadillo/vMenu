@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h4 class="h2"><a class="nav-item" href="{{url('patients')}}">Pacientes</a> / Nuevo paciente</h4>
    </div>
    <form id="StorePatient">
    {{ csrf_field() }}
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">Nombres</label>
          <input type="text" class="form-control" id="firstName" name="name">
          <div class="name-feedback feedback">
            
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Apellidos</label>
          <input type="text" name="last_name" class="form-control" id="lastName" placeholder="" value="">
          <div class="last_name-feedback feedback">
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="email">Email <span class="text-muted">(opcional)</span></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
          <div class="email-feedback feedback">
          </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="age">Edad</label>
        <input type="number" class="form-control" id="age" name="age">
        <div class="age-feedback feedback">
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="weight">Peso</label>
        <input type="text" class="form-control" name="weight" id="weight">
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
        <input type="text" class="form-control" name="alergies">
        <div class="alergies-feedback feedback">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3">
        <label for="chronic">Padecimientos crónicos</label>
        <input type="text" class="form-control" name="chronic" id="chronic">
        <div class="chronic-feedback feedback">
        </div>
      </div>
    </div>
    <hr class="mb-4">
    <h4 class="mb-3">Autoriza donar sus órganos</h4>
    <div class="d-block my-3">
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" name="donate" class="form-check-input" value="1" checked>
          Sí
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" name="donate" class="form-check-input" value="0">
          No
        </label>
      </div>
    </div>
    <hr class="mb-4">
    <button class="btn btn-lg btn-block btn-primary" type="submit"> Guardar &#10093</button>
  </form>
@endsection

@section('scripts')
<script>
    $('.paciente').addClass('active');
    $('.new_paciente').wrap('<b></b>');
    $('#collapsePacientes').addClass('show');

    $('#StorePatient').on('submit', function(e){
      e.preventDefault();
      $('.feedback').each(function(k, v){
        $(v).html("");
      });
      var data = new FormData($(this)[0]);
      $.ajax({
				url:'{{route("patients.store")}}',
				type:'POST',
        data: data,
				contentType:false,
				processData:false,
				success : function(data){
					window.location.href = "/patients/"+data;
				},
				error:function(data){						
					$.each(data.responseJSON.errors[], function(k,v){
						$('.'+k+'-feedback').html(v);
					});
				}

			});
    });

</script>
@endsection