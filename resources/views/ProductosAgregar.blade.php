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
            <div class="card-body ">

                <form action="{{ route('addproductosad') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="clave_componente" class="form-label">ID del producto</label>
                        <input type="text" class="form-control" id="clave_componente" name="clave_componente" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre_componente" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre_componente" name="nombre_componente" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion_componente" class="form-label">Descripción del producto</label>
                        <textarea class="form-control" id="descripcion_componente" name="descripcion_componente" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio_actual_componente" class="form-label">Precio actual del producto</label>
                        <input type="number" class="form-control" id="precio_actual_componente" name="precio_actual_componente" required>
                    </div>
                    <div class="mb-3">
                        <label for="existencia_componente" class="form-label">Existencia del producto</label>
                        <input type="number" class="form-control" id="existencia_componente" name="existencia_componente" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock_min_componente" class="form-label">Stock mínimo del producto</label>
                        <input type="number" class="form-control" id="stock_min_componente" name="stock_min_componente" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock_max_componente" class="form-label">Stock máximo del producto</label>
                        <input type="number" class="form-control" id="stock_max_componente" name="stock_max_componente" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_ct_marca" class="form-label">Marca del producto</label>
                        <select class="form-control" id="id_ct_marca" name="id_ct_marca" required>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id_marca }}">{{ $marca->nombre_marca }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_categoria" class="form-label">Categoría del producto</label>
                        <select class="form-control" id="id_categoria" name="id_categoria" required>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id_categoria }}">{{ $categoria->nombre_categoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="descuento_componente" class="form-label">Descuento del producto</label>
                        <input type="number" class="form-control" id="descuento_componente"
                               name="descuento_componente" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen del producto</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection

