@extends('plantilla')
@section('titulo', 'Listado de Mezclas')
@section('contenido')
<link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
<div >
    <div class="row imagenMezclaAleatoria ">


        <h1 class="col-12 text-light text-center">¿Qué Fumo Hoy?</h1>



        <div class="col-12 align-self-center">
            <div class="row justify-content-between">
                <div class="col-4 ">

                    <div class="card mb-3" style=" background: rgba(0,0,0,0.4);">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <!-- Depend of a aleatory number the page shows a aleatory mixing that you will smoke today -->
                                    @foreach ($sabores as $sabor)
                                    @if($mezclas[$numeroAleatorio]->sabor1 == $sabor->id)
                                    <h5 class="card-title text-light"> {{$sabor->nombre}} </h5>
                                    <p class="card-text text-light"> {{$sabor->descripcion}}</p>
                                    <p class="card-text text-light">Marca: {{ $sabor->marca }}</p>

                                    @endif
                                    @endforeach
                                    <h6 class="card-subtitle mb-2 text-light">
                                        {{$mezclas[$numeroAleatorio]->porcentaje1}}%
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="col-4">
                    <div class="card mb-3" style=" background: rgba(0,0,0,0.4);">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    @foreach ($sabores as $sabor)
                                    @if($mezclas[$numeroAleatorio]->sabor2 == $sabor->id)
                                    <h5 class="card-title text-light"> {{$sabor->nombre}} </h5>
                                    <p class="card-text text-light"> {{$sabor->descripcion}}</p>
                                    <p class="card-text text-light">Marca: {{ $sabor->marca }}</p>

                                    @endif
                                    @endforeach
                                    <h6 class="card-subtitle mb-2 text-light">
                                        {{$mezclas[$numeroAleatorio]->porcentaje2}}%
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($mezclas[$numeroAleatorio]->porcentaje3)


        <div class="col-12 align-self-end ">
            <div class="row justify-content-center align-items-center">
                <div class="col-4">

                    <div class="card mb-3 " style=" background: rgba(0,0,0,0.4);">
                        <div class="row g-0">

                            <div class="col-md-12 ">
                                <div class="card-body">
                                    @foreach ($sabores as $sabor)
                                    @if($mezclas[$numeroAleatorio]->sabor3 == $sabor->id)
                                    <h5 class="card-title text-light"> {{$sabor->nombre}} </h5>
                                    <p class="card-text text-light"> {{$sabor->descripcion}}</p>
                                    <p class="card-text text-light">Marca: {{ $sabor->marca }}</p>
                                    @endif
                                    @endforeach
                                    <h6 class="card-subtitle mb-2 text-light">
                                        {{$mezclas[$numeroAleatorio]->porcentaje3}}%
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endif



        <div class="my-1">
            <a href="{{ route('mezclas.aleatoria',random_int(0, count($mezclas)-1)) }}"><input type="button" value="Generar Mezcla" class="btn btn-dark btn-block"></input></a>
        </div>
    </div>
</div>
@endsection