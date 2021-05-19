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

<footer class="bg-light mt-3 text-dark text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">MHFLAVORS</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">CATEGORÍAS DESTACADAS</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">Top Sabores</a>
          </li>
          <li>
            <a href="#!" class="text-white">Nuestras Mezclas</a>
          </li>
          <li>
            <a href="#!" class="text-white">Tus Mezclas Favoritas</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">SOBRE NOSOTROS</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">Principales Locales</a>
          </li>
          <li>
            <a href="#!" class="text-white">Contacto</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->

  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(255, 255, 255, 0.9);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Sergio Moreno Garcia</a>
  </div>
  <!-- Copyright -->
</footer>

 </body>
 <script type="text/javascript" src="{{ secure_asset('js/ponerImagenes.js') }}"></script>


</html>


