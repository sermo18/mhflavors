@extends('plantilla')
@section('titulo', 'Tus Mezclas Favoritas ♡')
@section('contenido')

<div class="container-fluid ">


    <div class="row text-center mapaback">

        <h1 class="text-light text-center col-12">Principales Lounges</h1>
        <div id="map-container " class=" map-container mb-4 col-6" >
            <!-- This page show us a map with the most popular lounges that we can go to smoke -->
            <iframe class="mb-4 shadow p-3" src="https://www.google.com/maps/d/embed?mid=1LmlfBYmV4ljXxjqELdmLOBscH02e-GxV&hl=es" width="80%" height="80%" frameborder="0" style="border:0"></iframe>
        </div>


    </div>
</div>
@endsection
