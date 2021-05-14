@extends('plantilla')
@section('titulo', 'Todos los Sabores')
@section('contenido')
<link href="{{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">

<div class="container">
    <div class="row m-4">
        <h1 class="text-dark">Contacto</h1>
        
    </div>
    <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="tuemail@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="asunto" class="col-sm-2 col-form-label">Asunto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="asunto">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Archivo adjunto</label>
    <div class="col-sm-10">
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aqui tu mensaje"></textarea>
 
    </div> 
    </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
  </div>
</form>

  
</div>
@endsection