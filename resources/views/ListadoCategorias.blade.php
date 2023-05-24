@extends('plantilla')
@section('principal')
    @foreach ($categorias as $categoria)
        <h1>{{ $categoria->nombre_categoria }}</h1>
        <h1>{{ $categoria->descripcion_categoria }}</h1>
    @endforeach
@endsection
