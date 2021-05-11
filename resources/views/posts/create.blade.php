@extends('plantilla')
@section('titulo', 'Nuevo Post')
@section('contenido')
<form action="{{ route('posts.store') }}" method="GET">
@csrf
<div class="form-group">
<label for="titulo">Título:</label>
<input type="text" class="form-control" name="titulo"
id="titulo" value="{{ old('titulo') }}">
</div>
@if ($errors->has('titulo'))
<div class="text-danger text-center mb-1">
{{ $errors->first('titulo') }}
</div>
@endif
<div class="form-group">
<label for="contenido">Contenido:</label>
<textarea name="contenido" placeholder="Ingresa el contenido de tu post..." type="text" class="form-control"  id="contenido">
{{ old('mensaje') }}
</textarea>

@if ($errors->has('contenido'))
<div class="text-danger text-center mb-3 mt-3">
{{ $errors->first('contenido') }}
</div>
@endif
<div class="form-group">
<label for="usuario">Usuario:</label>
<select class="form-control" name="usuario" id="usuario">
@foreach ($usuarios as $usuario)
<option value="{{ $usuario->id }}">
{{ $usuario->nombre }}
</option>
@endforeach
</select>
</div>
@if(auth()->check())
<input type="submit" name="enviar" value="Enviar"
class="btn btn-dark btn-block">
@endif
</form>

@endsection