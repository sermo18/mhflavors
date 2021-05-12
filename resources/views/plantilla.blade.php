<html>
 <head>
 <title>
 @yield('titulo')
 </title>
<link href="/css/app.css" rel="stylesheet">

 </head>
 <body>
 @include('partials.nav')
<div class="img-header">

<div class="row justify-content-end align-content-end" style="width: 100%; height: 60%; ">
    <div class="col-12  text-center "><h1 class="text-light" style="font-size: 90px;">MHFlavors
    </h1></div>
    <h4 class="text-light col-12 text-center" >" Descubre Saborea, Vive. "</h4>
</div>
</div>


@yield('contenido')


<footer class="bg-dark mt-3 text-white text-lg-start">
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
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Sergio Moreno Garcia</a>
  </div>
  <!-- Copyright -->
</footer>

 </body>
</html>


