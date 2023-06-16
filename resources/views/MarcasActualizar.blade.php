@extends('plantilla')
@section('principal')

    <div class="content-wrapper" style="min-height: 2646.71px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Marcas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Marcas</li>
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
                    <form action="{{ route('editmarca') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="id_marca" class="form-label">ID de la marca</label>
                            <input type="text" class="form-control" id="id_marca" name="id_marca" value="{{ $marca->id_marca }}" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_marca" class="form-label">Nombre de la marca</label>
                            <input type="text" class="form-control" id="nombre_marca" name="nombre_marca" value="{{ $marca->nombre_marca }}"  required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="estatus" name="estatus" {{ $marca->status ? 'checked' : '' }}>
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
