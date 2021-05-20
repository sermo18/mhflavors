@extends('plantilla')
@section('titulo', 'Registro')
@section('contenido')
<div class="container-fluid">

    <div class="row text-center  registroback">


        <form action="{{ route('auth.registrarUsuario') }}" class="p-4 col-6 m-4" style="background-color: white;  opacity: 0.8; border-radius:22px;" method="POST">
            @csrf
            @if (!empty($error))
            <div class="text-danger">
                {{ $error }}
            </div>
            @endif
            <h1>Registro</h1>
            <div class="form-group">
                <div class="card-deck">


                    <div class="card text-center shadow">
                        <div class="card-header">
                            <h3>Simple</h3>
                            <h5>0 €</h5>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Tarifa Simple</h5>

                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Lista de Sabores</li>
                            <li class="list-group-item">Top 10 Sabores</li>
                            <li class="list-group-item">Lista de Mezclas</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                        </ul>

                        <div class="card-footer">

                            <input class="form-check-input" type="radio" value="simple" name="rol" id="rol">
                            <label class="form-check-label" for="rol">
                                Elegir esta opción
                            </label>
                        </div>
                    </div>
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

                        <div class="card-footer">

                            <input class="form-check-input" type="radio" name="rol" id="rol" value="premium">
                            <label class="form-check-label" for="rol">
                                Elegir esta opción
                            </label>

                        </div>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control shadow" name="nombre" id="nombre" />
                </div>
                <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" class="form-control shadow " name="login" id="login" />
                </div>
                <div class="form-group">
                    <label for="nacimiento">Fecha de nacimiento:</label>
                    <input type="number" class="form-control shadow " name="nacimiento" id="nacimiento" min="1910" max="2022" />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control shadow " name="password" id="password" />
                </div>

                <input type="submit" name="enviar" value="Registrarse" class="btn btn-dark btn-block mt-4">
            </div>
        </form>
    </div>
</div>
    @endsection
