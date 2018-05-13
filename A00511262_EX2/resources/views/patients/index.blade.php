@extends('layouts.layout')
@section('content')
@include('partials.modal')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h4 class="h2">Pacientes /</h4>
   </div>
   <input class="form-control search form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Buscar">
   <br>
      <table class="table table-striped results">
          <thead class="thead-dark">
                    <tr>
                    <th>Paciente</th>
                    <th class="text-center">Edad</th>
                    <th class="text-center" colspan="4"></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($patients))
                    @foreach($patients as $patient)
                    <tr>
                    <td>{{$patient->name}} {{$patient->last_name}}</td>
                    <td class="text-center">{{$patient->age}}</td>
                    <td class="text-center"><a href="{{route('consultations.create')}}?patient={{$patient->id}}" class="btn btn-outline-secondary">Realizar consulta médica &#10093</a></td>
                    <td class="text-center"><a href="{{route('patients.show', ['id'=>$patient['id']])}}" class="btn btn-info">Ver detalle &#10093</a></td>
                    <td class="text-center"><a href="{{route('patients.edit', ['id'=>$patient['id']])}}" class="btn btn-primary">Editar &#10093</a></td>
                    <td class="text-center">
                    <form action="{{route('patients.destroy', ['id'=>$patient->id])}}" class="form{{$patient->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input name="id" type="hidden" value="{{$patient->id}}">
                        
                    </form>
                    <button class="btn btn-danger deleteForm" data-form="form{{$patient->id}}" type="button">Eliminar &#10093</button>
                    </td>
                    </tr>
                    @endforeach
                    <tr class="warning no-result">
                      <td class="text-center alert alert-danger" colspan="5">No hay pacientes registrados</td>
                    </tr>
                    @else
                    <tr>
                    <td class="text-center alert alert-danger" colspan="5">No hay pacientes registrados</td>
                    </tr>
                    @endif
                
                </tbody>
        </table>
    
@endsection
@section('scripts')
<script>
    $('.paciente').addClass('active');
    $('.paciente_index').wrap('<b></b>');
    $('#collapsePacientes').addClass('show');
    
</script>
@endsection