@extends('layouts.layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h4 class="h2"><a class="nav-item" href="{{url('consultations')}}">Consultas</a> / Nueva consulta</h4>
    </div>
    <form id="StoreConsultation">
    {{ csrf_field() }}
    <div class="patientInfo">
      @isset($patient)
      <div class="card mb-4 box-shadow">
          <div class="card-header">
          <h4 class="my-0 font-weight-normal">Detalles del paciente</h4>
          </div>
          <div class="card-body">
            <h4 class="card-title pricing-card-title">{{ $patient->name}} {{ $patient->last_name}}</h4>
            <ul class="list-unstyled mb-4">
              <li>{{ $patient->age}} años</li>
              <li>{{ $patient->weight}} kg</li>
              <li><strong>Tipo de sangre: </strong>{{ $patient->bloodName}}</li>
              <li><strong>Alergias:</strong> {{ $patient->alergies}}</li>
              <li><strong>Enfermedades crónicas:</strong> {{ $patient->chronic}}</li>
              @if( $patient->donate == 1)
              <li><strong>Dona sus órganos</strong></li>
              @endif
              <li>{{ $patient->email}}</li>
            </ul>
          </div>
        </div>
        @endisset
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <label for="firstName">Paciente
          </label>
          <select class="custom-select d-block w-100" id="patient" name="patient_id">
            <option value="">Elige una opción...</option>
          </select>
          <div class="patient_id-feedback feedback">
          </div>
        </div>
      </div>
    
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="lastName">Descripción del malestar</label>
          <textarea type="text" name="description" class="form-control" id="description"></textarea>
          <div class="description-feedback feedback">
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Diagnóstico</label>
          <textarea type="text" name="diagnosed" class="form-control" id="diagnosed"></textarea>
          <div class="diagnosed-feedback feedback">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <label for="lastName">Fecha de próxima consulta</label>
          <input type="date" name="next_date" class="form-control" id="next_date">
          <div class="next_date-feedback feedback">
          </div>
        </div>
      </div>
     
     
      <hr class="mb-4">
      <button class="btn btn-lg btn-block btn-primary" type="submit"> Guardar &#10093</button>
  </form>
    
@endsection
@section('scripts')
<script>
    $('.consulta').addClass('active');
    $('.new_consulta').wrap('<b></b>');
    $('#collapseConsultas').addClass('show');
    $.getJSON( "{{url('patients')}}?ws=all", function( data ) {
      var text = '';
        for(var i = 0; i < data.length; i++){
            text += '<option value="'+data[i].id+'">'+data[i].name+' '+data[i].last_name+'</option>';
        }
        $('#patient').append(text);
        @isset($patient)
          $('#patient').val({{$patient->id}})
        @endif
    });
    

    $('#StoreConsultation').on('submit', function(e){
      e.preventDefault();
      $('.feedback').each(function(k, v){
        $(v).html("");
      });
      var data = new FormData($(this)[0]);
      $.ajax({
				url:'{{route("consultations.store")}}',
				type:'POST',
        data: data,
				contentType:false,
				processData:false,
				success : function(data){
					window.location.href = "/consultations/"+data;
				},
				error:function(data){						
					$.each(data.responseJSON, function(k,v){
						$.each(data.responseJSON.errors, function(k,v){
              $('.'+k+'-feedback').html(v);
            });
					});
				}

			});
    });

    $('#patient').on('change', function(){
      var info = '';
      $.getJSON( "{{url('patients')}}/"+$(this).val()+"?ws=getInfo", function( data ) {
        console.log(data);
        info = '<div class="card mb-4 box-shadow">\
          <div class="card-header">\
          <h4 class="my-0 font-weight-normal">Detalles del paciente</h4>\
          </div>\
          <div class="card-body">\
            <h3 class="card-title pricing-card-title">'+data.name+' '+data.last_name+'</h3>\
            <ul class="list-unstyled mb-4">\
              <li>'+data.age+' años</li>\
              <li>'+data.weight+' kg</li>\
              <li><strong>Tipo de sangre: </strong> '+data.bloodName+'</li>\
              <li><strong>Alergias:</strong>  '+data.alergies+'</li>\
              <li><strong>Enfermedades crónicas:</strong> '+data.chronic+'</li>';
              if( data.donate == 1){
                info += '<li><strong>Dona sus órganos</strong></li>';
              }
              info += '<li> '+data.email+'</li>\
            </ul>\
          </div>\
        </div>';
        $('.patientInfo').html(info);
      });
        
    });
   
</script>
@endsection