@extends('plantilla')
@section('titulo', 'Nueva Mezcla')
@section('contenido')
<div class="container">
<div class="row m-4"> 
        <h1>Crea tu nueva Mezcla</h1>
    </div>
<form action="{{ route('mezclas.store') }}" method="GET">
@csrf

<div class="row">
@for ($i = 1; $i < 4; $i++)
   

         <div class="col-4 mb-3">
        
            <div class="card text-center">
                <img class="card-img-top" src="https://cachimbasbaratas.pro/wp-content/uploads/2018/12/tabaco-para-cachimba.jpg" alt="Card image cap">
                <div class="card-img-overlay">

                <div class="card-body ">
                <select class="form-group card-title" name="sabor{{$i}}" id="sabor{{$i}}">
                @foreach ($sabores as $sabor)
                <option value="{{ $sabor->id }}">
                {{ $sabor->nombre }} de {{ $sabor->marca}}
                </option>
                @endforeach
                </select>
                
                <p class="card-text">Elige el sabor e indica la cantidad que quieres ponerle.</p>
                <div class="form-group">
                <label>Porcentaje del primer sabor:</label>
                <input type="number" class="form-control text-center" name="porcentaje{{$i}}"
                id="porcentaje{{$i}}" value="" min="0" max="100" step="10">
                </div>

                </div>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <div class="form-group">
    <input type="hidden" class="form-control" name="usuario"
    id="usuario" value="{{$userid}}">
    </div>
   

@if(auth()->check())
<input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
@endif
</form>
</div>
@endsection