@extends('paginas.index')
@section('principal')

    <header class="showcase">
        <div class="showcase-top">
        </div>
        <div class="showcase-content">
            <h1>CANDY SWEET</h1>
            <p>"DULCES DE TODO TIPO"</p>
            <a href="{{route('login')}}" class="btn btn-xl">
                iniciar sesion
                <i class="fas fa-chevron-right btn-icon"></i></a>
        </div>
    </header>

    <div class="container">
        <h1 class="mb-3" style="text-align: center;">DULCES DISPONIBLES</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="vistas/dulces.jpg" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="vistas/dulces.jpg" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="vistas/dulces.jpg" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>

    </div>
@endsection
