@extends('layouts.app')

@section('content')
    <select-pantalla :articulos="{{$pantallas}}" :cliente="{{$client}}"></select-pantalla>
@endsection