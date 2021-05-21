@extends('plantilla')
@section('titulo', 'Listado de Mezclas')
@section('contenido')
<script src="{{ asset('js/ponerImagenes.js') }}"></script>

<div class="container-fluid">
<div class="table-responsive">
<!-- This page shows all mixings that the users had created -->
    <table class="table table-striped">
        <div class="row m-4 text-center">
            <h1 class="text-center">Listado de Mezclas</h1>
        </div>
        <tr>
            <th>#</th>

            <th>Sabores</th>

            <th>Porcentajes</th>

            <th>Creador</th>

            <th>Valoración</th>
            <th class="text-center">Actions</th>
        </tr>
        @forelse($mezclas as $mezcla)


        <div class="modal fade" id="modalCompartir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enviar Mezcla</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title">Elige un usuario</h5>

                                <select class="form-control">
                                    @foreach ($usuarios as $usuario)

                                    <option>{{ $usuario->nombre }}</option>

                                    @endforeach
                                </select>
                                <div class="row my-4 ml-4 text-center">
                                    <a href="" class="col-2 "><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                            height="25" fill="green" class="bi bi-whatsapp  " viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg></a><a href="" class="col-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="25" height="25" fill="lightblue" class="bi bi-twitter "
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg></a><a href="" class="col-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="25" height="25" fill="blue" class="bi bi-facebook "
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg></a><a href="" class="col-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="25" height="25" fill="red" class="bi bi-google " viewBox="0 0 16 16">
                                            <path
                                                d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                        </svg></a><a href="" class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-files " viewBox="0 0 16 16">
                                            <path
                                                d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <a class="m-1 "><input type="button" value="Compartir" class="btn btn-dark"
                                data-dismiss="modal"></input></a>
                    </div>
                </div>
            </div>
        </div>
        <tr>

            <td>{{ $loop->index + 1 }} </td>



            <td>
                @forelse($sabores as $sabor)
                @switch($sabor->id)
                @case($mezcla->sabor1)
                <span>{{$sabor->nombre}}</span>
                @break

                @case($mezcla->sabor2)
                <span>, {{$sabor->nombre}}</span>
                @break

                @case($mezcla->sabor3)

                @if($sabor->nombre)
                <span>, {{$sabor->nombre}}</span>
                @endif

                @break

                @default

                @endswitch
                @empty
                @endforelse
            </td>


            <td>{{$mezcla->porcentaje1}}%, {{$mezcla->porcentaje2}}%
                @if($mezcla->porcentaje3)
                <span>, {{$mezcla->porcentaje3}}%</span>
                @endif
            </td>

            <td>
                @foreach ($usuarios as $usuario)
                @if($mezcla->usuario_id == $usuario->id)
                {{ $usuario->nombre }}
                @endif
                @endforeach
            </td>
            <td>
            @if(!$mezcla->valoracion)
                    N/S
            @else
                    {{ $mezcla->valoracion }} / 5
            @endif
            </td>
            <td class="text-center">

                @if(auth()->check())
                @if( auth()->user()->rol === 'premium')
                @if($mezcla->usuario_id == $userid )
                <a class="m-1 " title="Añadir a favoritas"><button type="button" class="btn btn-dark px-3"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="white" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg></button></a>
                <a class="m-1 " title="Compartir"><button type="button" class="btn btn-dark px-3" data-toggle="modal"
                        data-target="#modalCompartir"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="white" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path
                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg> </button></a>
                <a href="{{ route('mezclas.valorar', $mezcla) }}" class="m-1 " title="Valorar"><button type="button"
                        class="btn btn-dark px-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></button></a>
                @else
                <a href="{{ route('mezclas.añadir', $mezcla) }}" class="m-1 " title="Añadir a favoritas"><button type="button"
                        class="btn btn-dark px-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="white" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg></button></a>

                <a class="m-1 " title="Compartir"><button type="button" class="btn btn-dark px-3" data-toggle="modal"
                        data-target="#modalCompartir"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="white" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path
                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg> </button></a>
                <a href="{{ route('mezclas.valorar', $mezcla) }}" class="m-1 " title="Valorar"><button type="button"
                        class="btn btn-dark px-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></button></a>


                @endif
                @else

                <a class="m-1 " title="Añadir a favoritas"><button type="button" class="btn btn-dark px-3" data-toggle="modal"
                        data-target="#modalPremium"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="white" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg></button></a>
                <a class="m-1 " title="Compartir"><button type="button" class="btn btn-dark px-3" data-toggle="modal"
                        data-target="#modalCompartir"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="white" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path
                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg> </button></a>
                <a class="m-1 " title="Valorar"><button type="button" class="btn btn-dark px-3" data-toggle="modal"
                        data-target="#modalPremium"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></button></a>
                @endif
                @else


                <a class="m-1 " title="Añadir a favoritas"><button type="button" class="btn btn-dark px-3" data-toggle="modal"
                        data-target="#modalRegistro"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="white" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg></button></a>
                <a class="m-1 " title="Compartir"><button type="button" class="btn btn-dark px-3" data-toggle="modal"
                        data-target="#modalCompartir"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="white" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path
                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg> </button></a>

                <a class="m-1 " title="Valorar"><button type="button" class="btn btn-dark px-3" data-toggle="modal"
                        data-target="#modalRegistro"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></button></a>

                @endif



            </td>
        </tr>

        @empty


        @endforelse


    </table>
    </div>
    <div class="modal fade" id="modalPremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="documenta">
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
                    <a href="{{ route('mezclas.premium', $userid) }}" class="m-1 "><input type="button"
                            value="Hacerse Premium" class="btn btn-dark"></input></a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
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
                    <a href="{{ route('auth.registro') }}" class="m-1 "><input type="button" value="Registrate"
                            class="btn btn-dark"></input></a>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
