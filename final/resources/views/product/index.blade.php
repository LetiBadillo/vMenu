@extends('layouts.layout')
@section('content')
    @include('dashboard.menu')
@endsection
@section('scripts')
<script>


$(function() {
    $('.hidden-element').addClass('d-none').hide();

});

</script>
@endsection  