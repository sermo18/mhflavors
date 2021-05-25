@extends('plantilla')
@section('contenido')
<script src="{{ asset('js/ponerImagenes.js') }}"></script>
<div class="container-fluid">
    <!-- Show the flavor that we selected -->
    <div class="row justify-content-md-center align-items-center mt-3">
        <div class="card text-left ponerImagenes col-4">
            <div class="card-body text-white " style="height: 400px; width: 400px;">
                <h3 class="card-title text-left" style="height: 70px;">{{ $sabor->nombre }}</h3>
                <h5 class="card-text p-3">Descripcion: {{$sabor->descripcion }}</h5>
                <h5 class="card-text p-3">Marca: {{ $sabor->marca }}</h5>
                @if(!$sabor->valoracion)
                <h5 class="card-text p-3">Valoración: 0 / 5</h5>
                @else
                <h5 class="card-text p-3">Valoración: {{ $sabor->valoracion}} / 5 </h5>
                @endif

                @if(auth()->check())
                @if (auth()->user()->rol === 'premium')
                <div class="row justify-content-center align-items-right">
                    <a class="nav-link" href="{{ route('posts.edit', $sabor->id) }}">
                        <input type="submit" class="btn btn-secondary" value="Valorar Sabor" /></a>
                </div>
                @else

                <a class="nav-link">
                    <input type="submit" class="btn btn-secondary" value="Valorar Sabor" data-toggle="modal" data-target="#modalPremium" /></a>

                <div class="modal fade" id="modalPremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿No eres todavía usuario Premium?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Hazte Premium por tan solo 2,99 euros al mes.
                                <div class="card text-center shadow border-success">
                                    <div class="card-header text-white bg-success">
                                        <h3>Premium</h3>
                                        <h5>2,99 €</h5>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Tarifa Premium</h5>

                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Lista de Sabores</li>
                                        <li class="list-group-item">Top 10 Sabores</li>
                                        <li class="list-group-item">Valorar Sabores</li>
                                        <li class="list-group-item">Lista de Mezclas</li>
                                        <li class="list-group-item">Creación de mezclas</li>
                                        <li class="list-group-item">Sección de tus mezclas favoritas</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <a href="{{ route('mezclas.premium', Auth::id()) }}" class="m-1 "><input type="button" value="Hacerse Premium" class="btn btn-dark"></input></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>


            @else
        </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <form action="{{ route('post.store') }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comentarios:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="contenido" id="contenido" rows="3" placeholder="Deja tu comentario..."></textarea>
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" name="usuario" id="usuario" value="{{$userid}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="idsabor" id="idsabor" value="{{$sabor->id}}">
            </div>

            <input type="submit" class="btn btn-secondary" value="Enviar" />

        </form>
    </div>
</div>
@forelse($posts as $post)

<div class="row">
    <div class="col-12 mt-1">
        @if($post->sabor_id == $sabor->id)
        <div class="card ">
            <div class="card-header">
            @if( $post->usuario->login)
            {{ $post->usuario->nombre }}
            @endif
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>

                        {{$post->contenido}}
                    </p>
                    <footer class="blockquote-footer">
                        <cite title="Source Title">{{$post->created_at}}</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
        @endif
    </div>
</div>
@empty
</div>
@endforelse
<div class="row justify-content-md-center align-items-center mt-3">
    <div class="col-12 mt-3">
        <h3 class="text-secondary text-center">Más sabores de {{$sabor->marca}}</h3>
    </div>

    @forelse($saboresmarca as $sabormarca)
    <a class="col-3" href="{{ route('post.show', $sabormarca) }}" style="text-decoration: none;">
        <div class="card text-left ponerImagenes  agrandar" style="height: 200px; width: 200px;">
            <div class="card-body text-white ">
                <h3 class="card-title text-left" style="height: 30px;">{{ $sabormarca->nombre }}</h3>
                <h5 class="card-text"></h5>
                <h5 class="card-text p-3">Marca: {{ $sabormarca->marca }}</h5>
                @if(!$sabormarca->valoracion)
                <h5 class="card-text p-3">Valoración: 0 / 5 </h5>
                @else
                <h5 class="card-text p-3">Valoración: {{ $sabormarca->valoracion }} / 5 </h5>
                @endif
            </div>

        </div>
    </a>
    @empty
</div>
@endforelse
</div>
<div class="row justify-content-md-center align-items-center mt-3">
    <div class="col-12">
        <div>
            {{ $saboresmarca->links() }}
        </div>
    </div>
</div>
</div>





@endsection
