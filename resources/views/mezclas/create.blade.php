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
            @if($i == 1)
                <img class="card-img-top"  style="filter:brightness(40%);" src="https://cachimbasbaratas.pro/wp-content/uploads/2018/12/tabaco-para-cachimba.jpg" alt="Card image cap">
                <div class="card-img-overlay">

                <div class="card-body text-light">
                <select class="form-select card-title" name="sabor{{$i}}" id="sabor{{$i}}">
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
            @elseif($i == 2)
            <img class="card-img-top"  style="filter:brightness(40%);" src="data:image/jpeg;base64,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" alt="Card image cap">
                <div class="card-img-overlay">

                <div class="card-body text-light ">
                <select class="form-select card-title" name="sabor{{$i}}" id="sabor{{$i}}">
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
            @elseif($i == 3)
            <img class="card-img-top" src="https://www.ecig-vapo.com/images/product_277.jpg" style="filter:brightness(40%);" alt="Card image cap">
                <div class="card-img-overlay">

                <div class="card-body text-light">
                <select class="form-select card-title" name="sabor{{$i}}" id="sabor{{$i}}">
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
            @endif
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