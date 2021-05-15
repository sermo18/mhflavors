@extends('plantilla')
@section('titulo', 'Tus Mezclas Favoritas ♡')
@section('contenido')

<div class="container ">
<div class="row m-4">
            <h1>Principales Lounges</h1>
        </div>
        <div id="map-container" class=".z-depth-3 map-container" style="height: 100%">

    <iframe class="mb-4" src="https://www.google.com/maps/d/embed?mid=1LmlfBYmV4ljXxjqELdmLOBscH02e-GxV&hl=es" frameborder="0"
    style="border:0" allowfullscreen></iframe>
        </div>
</div>
@endsection