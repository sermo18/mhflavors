@extends('plantilla')
@section('titulo', 'Top 10 Mejores Sabores')
@section('contenido')
<div class="container">
    <div class="row m-4">
        <h1>Top 10 Mejores Sabores</h1>
    </div>
    <!-- Show the top 10 flavors of the all web  -->
    <div class="table-responsive">
    <table class="table">

        <tr>
            <th scope="col">#</th>

            <th scope="col">Nombre</th>

            <th scope="col">Id</th>

            <th scope="col">Descripción</th>

            <th scope="col">Marca</th>

            <th scope="col">Valoración</th>

            <th scope="col">Actions</th>
        </tr>
        @forelse($sabores as $sabor)
        <tr>

            <td scope="row">{{ $loop->index + 1 }}</td>

            <td>{{$sabor->nombre}}</td>

            <td>{{$sabor->id}}</td>

            <td>{{$sabor->descripcion}}</td>

            <td>{{$sabor->marca}}</td>

            @if(!$sabor->valoracion)

            <td>No ha sido valorado</td>
            @else
            <td>{{ $sabor->valoracion }} / 5 </td>
            @endif
            @if(auth()->check())
            @if( auth()->user()->rol === 'premium')
            <td><a class="nav-link" href="{{ route('posts.edit', $sabor->id) }}">
                    <input type="submit" class="btn btn-secondary" value="Valorar Sabor" /></a></td>
            @else
            <td><a class="nav-link">
                    <input type="submit" class="btn btn-secondary " data-toggle="modal" data-target="#modalPremium"
                        value="Valorar Sabor" /></a></td>

            <div class="modal fade" id="modalPremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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
                            <a href="{{ route('mezclas.premium', Auth::id()) }}" class="m-1 "><input type="button"
                                    value="Hacerse Premium" class="btn btn-dark"></input></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @else
            <td><a class="nav-link" >
                    <input type="submit" class="btn btn-secondary " data-toggle="modal" data-target="#modalRegistro"
                        value="Valorar Sabor" /></a></td>

                <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Usuario Desconocido</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Aún no te has registrado? Registrate en un momento
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <a href="{{ route('auth.registro') }}" class="m-1 "><input type="button"
                                value="Registrate" class="btn btn-dark"></input></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </tr>

        @empty

        @endforelse


    </table>
    </div>


</div>
@endsection
