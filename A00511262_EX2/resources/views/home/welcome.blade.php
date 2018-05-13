@extends('layouts.layout')
@section('content')
<br><br><br><br><br><br>
    <div class="text-center align-middle" style="height: 100vH !important;">
        <h1>Hospital APD</h1>
        <br><br>
        <img class="mb-4 img-fluid" src="{{url('images/welcome.gif')}}">
        <br><br>
        <p>{{count(App\Models\Patient::all())}} pacientes registrados</p>
    </div>
@endsection
@section('scripts')
<script>
    $('.inicio').addClass('active');
</script>
@endsection