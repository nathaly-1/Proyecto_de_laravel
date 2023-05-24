@extends('plantilla')
@section('principal')
<div class="content-wrapper" style="min-height: 2646.71px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categorias</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Productos</li>
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
                <table class="table table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Eliminar</th>
                        <th>Editar</th>
                    </tr>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id_categoria }}</td>
                            <td>{{ $categoria->nombre_categoria }}</td>
                            <td>{{ $categoria->descripcion_categoria }}</td>

                            <td>

                                <form action="{{ route('deletecategoria', ['id'=> $categoria->id_categoria]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>

                            </td>
                            <td>
                                <button class="btn btn-success">Editar</button>
                            </td>
                        </tr>
                    @endforeach
                </table>

                <div padding-top: 10px;>

                    <a href="{{ route('agregarcategoria') }}" class="btn btn-primary">Agregar Categoria</a>
                </div>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

@endsection
