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
                    <form action="{{ route('editcategoria') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="id_categoria" class="form-label">ID de la categoria</label>
                            <input type="text" class="form-control" id="id_categoria" name="id_categoria" value="{{ $categoria->id_categoria }}" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_categoria" class="form-label">Nombre de la categoria</label>
                            <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" value="{{ $categoria->nombre_categoria }}"  required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion_categoria" class="form-label">descripcion de la categoria</label>
                            <textarea class="form-control" id="descripcion_categoria" name="descripcion_categoria" required>{{ $categoria->descripcion_categoria }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen del categoria</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="estatus" name="estatus" {{ $categoria->status_categoria ? 'checked' : '' }}>
                            <label class="form-check-label" for="estatus">Activo</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection
