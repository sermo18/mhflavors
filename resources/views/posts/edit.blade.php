@extends('plantilla')
@section('titulo', 'Editar Post')
@section('contenido')
<script src="{{ asset('js/ponerImagenes.js') }}"></script>
<div class="container-fluid" style="min-height: 100vh;">
    <!-- This view it's to valorate the flavors -->
    <div class="row mt-4 justify-content-center text-center align-items-center" >

        <div class="card text-center ponerImagenes  col-12 col-md-6 mt-4 " >
            <div class="card-body text-white " style="min-height: 80vh;" >
                <h3 class="card-title text-left" >{{ $sabor->nombre }}</h3>
                <h5 class="card-text p-3">Descripcion: {{$sabor->descripcion }}</h5>
                <h5 class="card-text p-3">Marca: {{ $sabor->marca }}</h5>
                @if(!$sabor->valoracion)
                    <h5 class="card-text p-3">Valoración: 0 / 5</h5>
                    @elseif(floor( $sabor->valoracion / $sabor->votos ) -  ($sabor->valoracion / $sabor->votos)== 0 )
                    <h5 class="card-text p-3">Valoración: {{$sabor->valoracion / $sabor->votos}} / 5 </h5>
                    @else
                    <h5 class="card-text p-3">Valoración: {{ number_format($sabor->valoracion / $sabor->votos, 2, '.', '')}} / 5 </h5>
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
                        <p><button class="btn btn-secondary m-4" type="submit">Valorar</button></p>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection
