<html>

<head>
    <title>
        @yield('titulo')
    </title>
    <link href="{{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
    @include('partials.nav')
    <div style="height:96px;"></div>
    @yield('contenido')

    <script src="{{ secure_asset('js/ponerImagenes.js') }}"></script>

    <footer class="text-light text-lg-start " style="background-color: rgb(10, 10, 10);">

        <!-- Copyright -->
        <div class="text-center p-3">
            © 2020 Copyright:
            <a class="text-light" href="#">Sergio Moreno Garcia</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>
<script type="text/javascript" src="{{ secure_asset('js/ponerImagenes.js') }}"></script>


</html>
