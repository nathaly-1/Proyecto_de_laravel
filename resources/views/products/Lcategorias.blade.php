@extends('paginas.index')
@section('principal')

    <link rel="stylesheet" href="style/v.css">
    <section class="cards-wrapper">

        @foreach ($categorias as $categoria)
            <div class="card-grid-space">
                @php
                    $imagen = base64_encode($categoria->image_cat);
                @endphp
                <a class="card" href="{{ route('productoslist', ['clave'=>$categoria->id_categoria]) }}"
                   style="--bg-img: url('data:image/png;base64,{{$imagen}}');">
                    <div>
                        <h1>{{ $categoria->nombre_categoria }}</h1>
                        <p>{{ $categoria->descripcion_categoria }}</p>

                        <div class="tags">
                            <div class="tag">{{ $categoria->nombre_categoria }}</div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </section>
@endsection
