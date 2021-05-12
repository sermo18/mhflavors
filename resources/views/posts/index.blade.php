@extends('plantilla')
@section('titulo', 'Todos los Sabores')
@section('contenido')
<link href="{{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">

<div class="container">
    <div class="row m-4">
        <h1 class="text-dark">Todos los Sabores</h1>
    </div>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>

    <div class="row  justify-content-center align-content-center">

      

            <div class="col-12 btn-group mb-3">
                <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>

                <div class="dropdown-menu">
                    @forelse($marcas as $marca)
                    <a href="{{ route('post.filtrar', $marca) }}" style="text-decoration: none;">{{$marca}}</a>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

    <div class="row" id="myFlavor">
        @forelse($sabores as $sabor)


        <div class="col-12 col-sm-6 col-md-4 mb-3 quitar">
            <div class="card text-left ponerImagenes">
                <div class="card-body text-white " style="height: 400px; ">
                    <h3 class="card-title text-left" style="height: 70px;">{{ $sabor->nombre }}</h3>
                    <h5 class="card-text p-3">Descripcion: {{$sabor->descripcion }}</h5>
                    <h5 class="card-text p-3">Marca: {{ $sabor->marca }}</h5>
                    @if(!$sabor->valoracion)
                    <h5 class="card-text p-3">Valoración: No se ha valorado aún</h5>
                    @else
                    <h5 class="card-text p-3">Valoración: {{ $sabor->valoracion }} / 5 </h5>
                    @endif

                    <div class="row justify-content-center align-items-right">
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