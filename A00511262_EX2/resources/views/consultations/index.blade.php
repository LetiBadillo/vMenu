@extends('layouts.layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h4 class="h2">Consultas </h4>
  </div>
  
@include('partials.consultations_index')
    
@endsection
@section('scripts')
<script>
    $('.consulta').addClass('active');
    $('.consulta_index').wrap('<b></b>');
    $('#collapseConsultas').addClass('show');
</script>
@endsection