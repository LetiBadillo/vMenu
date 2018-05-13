@extends('layouts.layout')
@include('partials.modal')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h4 class="h2"><a class="nav-item" href="{{url('patients')}}">Pacientes</a> / {{$patient->name}} {{$patient->last_name}}</h4>
<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="{{route('consultations.create')}}?patient={{$patient->id}}" class="btn btn-sm btn-outline-secondary">Realizar consulta &#10093</a>
            <a href="{{route('patients.edit', ['id' => $patient->id])}}" class="btn ml-2 btn-sm btn-outline-primary">Editar &#10093</a>
            <form action="{{route('patients.destroy', ['id'=>$patient->id])}}" class="form{{$patient->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input name="id" type="hidden" value="{{$patient->id}}">
                    </form>
                    <button class="btn btn-sm btn-outline-danger ml-2 deleteForm" data-form="form{{$patient->id}}" type="button">Eliminar &#10093</button>
          </div>
        </div>
</div>
    @include('partials.patient_info')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Historial de consultas de {{$patient->name}}</h1>
</div>
    @php $consultations = $patient->consultation @endphp
    @include('partials.consultations_index')
@endsection
@section('scripts')
<script>
    patient = {!! str_replace("'", "\'", json_encode($patient)) !!};
    $('.paciente').addClass('active');
</script>
@endsection