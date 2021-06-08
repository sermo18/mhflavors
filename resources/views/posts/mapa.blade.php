@extends('plantilla')
@section('titulo', 'Tus Mezclas Favoritas ♡')
@section('contenido')
<div class="container-fluid p-0 m-0">


    <div class="row mapaback p-0 m-0">
        <h1 class="text-light text-center pt-4 m-4">Principales Lounges</h1>
        <div class="col-12  text-center ">
            <div class="col-12">
                <div id="map-container " class=" map-container mb-4">
                    <!-- This page show us a map with the most popular lounges that we can go to smoke -->
                    <iframe class="mb-4 shadow p-3" src="https://www.google.com/maps/d/embed?mid=1LmlfBYmV4ljXxjqELdmLOBscH02e-GxV&hl=es" width="80%" height="800px" frameborder="0" style="border:0"></iframe>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection