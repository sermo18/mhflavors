@extends('plantilla')
@section('titulo', 'Contacto')
@section('contenido')
<link href="{{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">
<!-- This is the contact page -->
<div class="container-fluid" height="100%">

<div class="row">
        <div class="col-12 text-center contactoback">
        <form style="background-color: white;">
        <h1 class="text-white p-3">Contacto</h1>
        <div class="form-group row" >
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control shadow p-3" id="inputEmail3" placeholder="tuemail@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="asunto" class="col-sm-2 col-form-label">Asunto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control shadow p-3" id="asunto">
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Archivo adjunto</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Example textarea</label>
            <div class="col-sm-10">
                <textarea class="form-control shadow p-3" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aqui tu mensaje"></textarea>

            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>


        </div>
    </div>
    <div class="row m-4">
        <h1 class="text-dark">Contacto</h1>

    </div>


</div>
</div>
@endsection
