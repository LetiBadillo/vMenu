@extends('layouts.layout')
@section('content')
@php $patient = $consultation->patient @endphp
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h4 class="h2"><a class="nav-item" href="{{url('consultations')}}">Consultas</a> / Detalle de consulta</h4>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{route('patients.show', ['id' => $patient->id])}}" class="btn btn-sm btn-outline-secondary">Ver historial del paciente &#10093</a>
      </div>
  </div>
</div>
        
        @include('partials.patient_info')

      <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Detalles de consulta </h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
            <h3 class="card-title pricing-card-title">{{$consultation->patient->name}} {{$consultation->patient->last_name}}</h3>
              <li><strong>Descripción del malestar:</strong></li>
              <li>{{$consultation->description}}</li>
              <li><strong>Diagnóstico:</strong></li>
              <li>{{$consultation->diagnosed}}</li>
              <li><strong>Fecha de consulta</strong> {{$consultation->created_at}}</li>
              <li><strong>Próxima consulta</strong> {{$consultation->next_date}}</li>
              
            </ul>
          </div>
        </div>
    
@endsection
@section('scripts')
<script>
    $('.consulta').addClass('active');
</script>
@endsection