@extends('plantilla')
@section('titulo', 'Login')
@section('contenido')
<div class="container">
<div class="row m-4"> 
        <h1>Login</h1>
    </div>
@if (!empty($error))
<div class="text-danger">
{{ $error }}
</div>
@endif
<form action="{{ route('auth.login') }}" method="POST">
@csrf
<div class="form-group">
<label for="login">Login:</label>
<input type="text" class="form-control"
name="login" id="login" />
</div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" class="form-control"
name="password" id="password" />
</div>
<input type="submit" name="enviar" value="Enviar"
class="btn btn-dark btn-block">
<a href="{{ route('auth.registro') }}" class="m-1 "><input type="button"
value="Registrate" class="btn btn-light btn-block"></input></a>
</form>
</div>
@endsection