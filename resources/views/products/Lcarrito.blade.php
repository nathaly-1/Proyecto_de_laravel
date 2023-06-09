@extends('paginas.index')
@section('principal')
    <div class="m-5">
        <table class="table table-dark">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Usuario</th>
                <th class="text-center">Componente</th>
                <th class="text-center">Cantidad</th>
            </tr>
            </thead>
            <tbody>

            @foreach($carritos as $carrito)
                <tr>
                    <td class="text-center">{{ $carrito->id_carrito }}</td>
                    <td class="text-center">{{ $carrito->user->name }}</td>
                    <td class="text-center">{{ $carrito->componente->nombre_componente }}</td>
                    <td class="text-center">{{ $carrito->cantidad }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-right">
            <a href="{{route('compa-exitosa')}}" class="btn btn-success" >Procesar Compra</a>
        </div>
    </div>
@endsection
