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
                        <li class="breadcrumb-item active">Categorias</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body ">
                <form action="{{route('crearcategoria')}}" method="POST">
                    @csrf
                    <div class="form-label">
                        <label for="nombre_marca">Nombre de la categoria:</label>
                        <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Nombre de la categoria">
                    </div>
                    <div class="form-label">
                        <label for="nombre_marca">Descripcion de la categoria:</label>
                        <input type="text" class="form-control" id="descripcion_categoria" name="descripcion_categoria" placeholder="Descripcion de la categoria">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="status_categoria" name="status_categoria" value="Activo">
                            <label class="form-check-label" for="status_categoria">Activo</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Categoria</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection
