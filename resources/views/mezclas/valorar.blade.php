@extends('plantilla')
@section('titulo', 'Listado de Mezclas')
@section('contenido')
<link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
<script src="{{ asset('js/ponerImagenes.js') }}"></script>

<div class="container-fluid">
    <div class="row m-4">
        <h1>Valorar Mezcla</h1>
    </div>
    <div class=" row ">
<!-- This page its for valorate the mixing that you have smoked -->
        <div class="col-12 align-self-center">
            <div class="row ">
                <div class="col-4 ">
                    <div class="card">
                            <div class="ponerImagenes shadow p-3">
                                <div class="card-body" style="height: 400px;">
                                    @foreach ($sabores as $sabor)
                                    @if($mezcla->sabor1 == $sabor->id)
                                    <h3 class="card-title text-light"> {{$sabor->nombre}} </h3>
                                    <p class="card-text text-light"> {{$sabor->descripcion}}</p>
                                    <p class="card-text text-light">Marca: {{ $sabor->marca }}</p>

                                    @endif
                                    @endforeach
                                    <h6 class=" text-light">
                                        {{$mezcla->porcentaje1}}%</h6>
                                </div>
                            </div>
                        
                    </div>



                </div>
                @if($mezcla->porcentaje3)
                <div class="col-4">

                    <div class="card  " >
                        

                            <div class="ponerImagenes shadow p-3" >
                                <div class="card-body" style="height: 400px; ">
                                    @foreach ($sabores as $sabor)
                                    @if($mezcla->sabor3 == $sabor->id)
                                    <h3 class="card-title text-light"> {{$sabor->nombre}} </h3>
                                    <p class="card-text text-light"> {{$sabor->descripcion}}</p>
                                    <p class="card-text text-light">Marca: {{ $sabor->marca }}</p>
                                    @endif
                                    @endforeach
                                    <h6 class=" text-light">
                                        {{$mezcla->porcentaje3}}%</h6>
                                </div>
                            </div>
                       
                    </div>
                </div>
                @endif
                <div class="col-4">
                    <div class="card" >
                        
                            <div class="ponerImagenes shadow p-3">
                                <div class="card-body" style="height: 400px; ">
                                    @foreach ($sabores as $sabor)
                                    @if($mezcla->sabor2 == $sabor->id)
                                    <h3 class="card-title text-light"> {{$sabor->nombre}} </h3>
                                    <p class="card-text text-light"> {{$sabor->descripcion}}</p>
                                    <p class="card-text text-light">Marca: {{ $sabor->marca }}</p>
                                    @endif
                                    @endforeach
                                    <h6 class=" text-light">
                                        {{$mezcla->porcentaje2}}%</h6>
                                </div>
                            </div>
                     
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 ">
            <div class="row ">
                <form class="formEstrellas" action="{{ route('mezclas.valorarMezcla', $mezcla->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <p class="clasificacion">

                        <input class="estrellas" id="radio1" type="radio" name="valoracion" value="5">

                        <label class="radioEstrellas" for="radio1">★</label>

                        <input class="estrellas" id="radio2" type="radio" name="valoracion" value="4">

                        <label class="radioEstrellas" for="radio2">★</label>

                        <input class="estrellas" id="radio3" type="radio" name="valoracion" value="3">

                        <label class="radioEstrellas" for="radio3">★</label>

                        <input class="estrellas" id="radio4" type="radio" name="valoracion" value="2">

                        <label class="radioEstrellas" for="radio4">★</label>

                        <input class="estrellas" id="radio5" type="radio" name="valoracion" value="1">

                        <label class="radioEstrellas" for="radio5">★</label>
                        <button type="submit" class="mt-2" style="float: right;">Valorar</button>
                    </p>

                </form>
            </div>
        </div>



    </div>

</div>

@endsection