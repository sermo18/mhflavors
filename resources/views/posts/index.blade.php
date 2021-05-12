@extends('plantilla')
@section('titulo', 'Todos los Sabores')
@section('contenido')
<script src="{{ secure_asset('js/ponerImagenes.js') }}"></script>
<link href="{{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">

<div class="container">
    <div class="row m-4">
        <h1 class="text-dark">Todos los Sabores</h1>
    </div>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
    <div class="row  justify-content-center align-content-center">

        @forelse($marcas as $marca)
            <div class=" col-2">
            <a href="{{ route('post.filtrar', $marca) }}" ><input type="button"
                                value="{{$marca}}" class="p-4 my-4" style="width: 180px;"></input></a>
            </div>
            @empty
        @endforelse

    </div>
    <div class="row" id="myFlavor">
        @forelse($sabores as $sabor)


        <div class="col-12 col-sm-6 col-md-4 mb-3 quitar">
            <div class="card text-left ponerImagenes" >
                <div class="card-body text-white "  style="height: 400px; ">
                    <h3 class="card-title text-left" style="height: 70px;" >{{ $sabor->nombre }}</h3>
                    <h5 class="card-text p-3">Descripcion:  {{$sabor->descripcion }}</h5>
                    <h5 class="card-text p-3">Marca: {{ $sabor->marca }}</h5>
                    @if(!$sabor->valoracion)
                    <h5 class="card-text p-3">Valoración: No se ha valorado aún</h5>
                    @else
                    <h5 class="card-text p-3">Valoración: {{ $sabor->valoracion }} / 5 </h5>
                    @endif

                    <div class="row justify-content-center align-items-right">
                        <a href="{{ route('post.show', $sabor) }}" class=" p-4"><input type="button"
                                value="Saber más" class="p-2"></input></a>
                    </div>
                </div>
            </div>
        </div>
        @empty
    </div>
    @endforelse
    </div>
    <div class="row">
        <div class="col">
            <div >
                {{ $sabores->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
