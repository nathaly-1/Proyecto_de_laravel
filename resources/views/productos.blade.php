@extends('plantilla')
@section('principal')
    <div class="content-wrapper" style="min-height: 2646.71px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Productos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">PRODUCTOS</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Existencia</th>
                            <th>Stock Mínimo</th>
                            <th>Stock Máximo</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($componentes as $componente)
                            <tr>
                                <td>{{ $componente->clave_componente }}</td>
                                <td>{{ $componente->nombre_componente }}</td>
                                <td>{{ $componente->descripcion_componente }}</td>
                                <td>{{ $componente->precio_actual_componente }}</td>
                                <td>{{ $componente->existencia_componente }}</td>
                                <td>{{ $componente->stock_min_componente }}</td>
                                <td>{{ $componente->stock_max_componente }}</td>
                                <td>
                                    @php
                                        $imagen = base64_encode($componente->imagen);
                                    @endphp
                                    <img src="data:image/png;base64,{{$imagen}}" alt='Img blob desde MySQL' class="img-fluid" width="100"/>
                                </td>
                                <td>
                                    <form action="{{ route('productoborrar', ['id' => $componente->clave_componente]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                    <a href="/" class="btn btn-warning">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div padding-top: 10px;>

                        <a href="{{ route('productosad') }}" class="btn btn-primary">Agregar Producto</a>
                    </div>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

@endsection
