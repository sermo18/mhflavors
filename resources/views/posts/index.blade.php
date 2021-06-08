@extends('plantilla')
@section('titulo', 'Todos los Sabores')
@section('contenido')
<link href="{{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">

<div class="container-fluid">
    <div class="row m-4">
        <h1 class="text-dark">Todos los Sabores</h1>
    </div>
    <input class="form-control buscador" id="myInput" type="text" placeholder="Search..">
    <br>
<!-- This page shows all the flavors -->
    <div class="row">
            <div class="col-12 btn-group mb-3">
                <button type="button" class="btn btn-dark btn-block dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    -- Filtrar por marca --
                </button>

                <div class="dropdown-menu col-12">
                    @forelse($marcas as $marca)
                    <a class="dropdown-item col-12" href="{{ route('post.filtrar', $marca) }}" style="text-decoration: none;">{{$marca}}</a>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

    <div class="row" id="myFlavor">
        @forelse($sabores as $sabor)


        <div class="col-12 col-sm-6 col-md-4 mb-3 quitar ">
        @if(auth()->check())
        @if(auth()->user()->rol === 'admin')
        <a href="{{ route('post.destroy', $sabor->id) }}" class="adminSabores">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
</a>
        @endif
        @endif
            <div class="card text-left ponerImagenes shadow p-3">
                <div class="card-body text-white">
                    <h3 class="card-title text-left" style="height: 70px;">{{ $sabor->nombre }}</h3>
                    <h5 class="card-text p-3">Descripcion: {{$sabor->descripcion }}</h5>
                    <h5 class="card-text p-3">Marca: {{ $sabor->marca }}</h5>
                    @if(!$sabor->valoracion)
                    <h5 class="card-text p-3">Valoración: 0 / 5</h5>
                    @elseif(explode(".", ($sabor->valoracion / $sabor->votos)[1] == '00'))
                    <h5 class="card-text p-3">Valoración: {{$sabor->valoracion / $sabor->votos}} / 5 </h5>
                    @else
                    <h5 class="card-text p-3">Valoración: {{ number_format($sabor->valoracion / $sabor->votos, 2, '.', '')}} / 5 </h5>
                    @endif

                    <div class="row justify-content-center align-items-right" style="position: relative; bottom: 25px;">
                        <a href="{{ route('post.show', $sabor) }}" class=" p-4"><input type="button" value="Saber más" class="p-2"></input></a>
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
        <div>
            {{ $sabores->links() }}
        </div>
    </div>
</div>
</div>
@endsection
