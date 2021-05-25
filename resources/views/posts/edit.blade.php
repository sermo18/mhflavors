@extends('plantilla')
@section('titulo', 'Editar Post')
@section('contenido')
<script src="{{ asset('js/ponerImagenes.js') }}"></script>
<div class="container-fluid" style="height: 80vh;">
    <!-- This view it's to valorate the flavors -->
    <div class="row ">
        <div class="col-12 col-md-4 back text-center pt-3">
            <div class="card text-center ponerImagenes" style="border-radius:22px;">
                <div class="card-body text-white " style="height:50vh;">
                    <h3 class="card-title " style="height: 70px;">{{ $sabor->nombre }}</h3>
                    <h5 class="card-text p-3">Descripcion: {{$sabor->descripcion }}</h5>
                    <h5 class="card-text p-3">Marca: {{ $sabor->marca }}</h5>
                    @if(!$sabor->valoracion)
                    <h5 class="card-text p-3">Valoración: </h5>
                    @else
                    <h5 class="card-text p-3">Valoración: {{ $sabor->valoracion }} / 5 </h5>
                    @endif

                    <div class="row text-center">
                        <form class="formEstrellas" action="{{ route('posts.update', $sabor->id)}}" method="POST">
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

                            </p>
                            <p><button type="submit">Valorar</button></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
