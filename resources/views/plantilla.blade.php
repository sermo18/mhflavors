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

    <footer class=" mt-3 text-dark text-lg-start" style="background-color: rgba(243, 243, 243, 0.932);">

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(243, 243, 243, 0.932);">
            © 2020 Copyright:
            <a class="text-dark" href="#">Sergio Moreno Garcia</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>
<script type="text/javascript" src="{{ secure_asset('js/ponerImagenes.js') }}"></script>


</html>
