@extends('plantilla')
@section('titulo', 'Tus Mezclas Favoritas ♡')
@section('contenido')

<div class="container ">
<div class="row m-4">
            <h1>Principales Lounges</h1>
        </div>
        <div id="map-container" class="z-depth-1-half map-container">

    <iframe class="mb-4" src="https://www.google.com/maps/d/embed?mid=1LmlfBYmV4ljXxjqELdmLOBscH02e-GxV&hl=es" width="100%" height="100%"></iframe>
        </div>
</div>
@endsection