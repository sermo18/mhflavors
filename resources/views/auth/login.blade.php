@extends('plantilla')
@section('titulo', 'Login')
@section('contenido')
<div class="container-fluid">

    <div class="row text-center  loginback">

    @if (!empty($error))
    <div class="text-danger">
        {{ $error }}
    </div>
    @endif

    <form action="{{ route('auth.login') }}" class="px-4 col-12" style="background-color: white;" method="POST">
        @csrf
        <h1 class="text-dark p-3">Login</h1>
        <div class="form-group ">
            <label for="login">Login:</label>
            <input type="text" class="form-control shadow p-3" name="login" id="login" />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control shadow p-3" name="password" id="password" />
        </div>
        <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block ">
        <a href="{{ route('auth.registro') }}" class="m-1 "><input type="button" value="Registrate" class="btn btn-light btn-block"></input></a>
    </form>
    </div>
</div>
@endsection
