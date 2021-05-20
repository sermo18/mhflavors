@extends('plantilla')
@section('titulo', 'Tus Mezclas Favoritas ♡')
@section('contenido')

<div class="container-fluid ">
    <div class="row ">

        <div class="col-12  text-center mapaback">
            <div class="row ">
                <div class="col-12">
                    <h1 class="text-light text-center">Principales Lounges</h1>
                </div>
                <div class="col-12">
                    <div id="map-container " class=" map-container mb-4">
                        <!-- This page show us a map with the most popular lounges that we can go to smoke -->
                        <iframe class="mb-4 shadow p-3" src="https://www.google.com/maps/d/embed?mid=1LmlfBYmV4ljXxjqELdmLOBscH02e-GxV&hl=es" width="100%" height="600px" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
