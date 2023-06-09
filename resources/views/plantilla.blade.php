<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/30fc73e490.js" crossorigin="anonymous"></script>
    <!-- pagina -->
    <link rel="stylesheet" href="/css/plugins/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/css/plugins/adminlte.min.css">
    <link rel="stylesheet" href="/css/css/adminlte.min.css">
    <link rel="stylesheet" href="/js/plugins/demo.js">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/30fc73e490.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
            integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="/js/plugins/jquery.overlayScrollbars.min.js"></script>
    <script src="/js/plugins/adminlte.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @if(Auth::user()->id_rol==2)
        @include('Modulos.header')
        @include('Modulos.shildervar')
        @yield('principal')
        @include('Modulos.footer')
    @else
        <div class="container">
            <h1 style="text-align: center; margin-bottom: 50%;">No tienes los permisos master</h1>
        </div>
    @endif

</div>

<script src="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>
