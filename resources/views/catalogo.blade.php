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


  <div class="container" >
    <h1>Catálogo de Productos</h1>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="imagen1.jpg" alt="Producto 1">
          <div class="card-body">
            <h5 class="card-title">Producto 1</h5>
            <p class="card-text">Descripción del producto 1.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="imagen2.jpg" alt="Producto 2">
          <div class="card-body">
            <h5 class="card-title">Producto 2</h5>
            <p class="card-text">Descripción del producto 2.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="imagen3.jpg" alt="Producto 3">
          <div class="card-body">
            <h5 class="card-title">Producto 3</h5>
            <p class="card-text">Descripción del producto 3.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
