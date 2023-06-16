@extends('plantilla')
@section('principal')
    <div class="content-wrapper" style="min-height: 2646.71px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>MARCAS</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">MARCAS</li>
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
                            <th>Borrar</th>
                            <th>Editar</th>
                        </tr>
                        @foreach ($marcas as $marca)
                            <tr>
                                <td>{{ $marca->id_marca }}</td>
                                <td>{{ $marca->nombre_marca }}</td>
                                <td>

                                    <form action="{{ route('deletemarca', ['id'=> $marca->id_marca]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>

                                </td>
                                <td>
                                    <a href="{{ route('marcaedit',['id' => $marca->id_marca]) }}"
                                       class="btn btn-warning">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <div padding-top: 10px;>

                        <a href="{{ route('agregarmarca') }}" class="btn btn-primary">Agregar Marca</a>
                    </div>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

@endsection
