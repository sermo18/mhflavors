@extends('plantilla')
@section('titulo', 'Nueva Mezcla')
@section('contenido')
<div class="container-fluid">
    <div class="row m-4">
        <h1>Crea tu nueva Mezcla</h1>
    </div>
    <form action="{{ route('mezclas.store') }}" method="GET">
        @csrf

        <!-- This page its for create a new mixing  -->
        <div class="row">
            @for ($i = 1; $i < 4; $i++) <div class="col-4 mb-3" style="height: 100vh;">

                <div class="card text-center shadow p-3">
                    @if($i == 1)


                    <div class="card-body text-light">
                        <select class="form-control form-control-lg card-title" name="sabor{{$i}}" id="sabor{{$i}}">
                            @foreach ($sabores as $sabor)
                            <option value="{{ $sabor->id }}">
                                {{ $sabor->nombre }} de {{ $sabor->marca}}
                            </option>
                            @endforeach
                        </select>

                        <p class="card-text">Elige el sabor e indica la cantidad que quieres ponerle.</p>
                        <div class="form-group">
                            <label>Porcentaje del primer sabor:</label>
                            <input type="number" class="form-control text-center mt-3" name="porcentaje{{$i}}" id="porcentaje{{$i}}" value="" min="0" max="100" step="10">
                        </div>


                    </div>

                </div>

                @elseif($i == 2)
                <div class="card-body text-light ">
                    <select class="form-control form-control-lg card-title" name="sabor{{$i}}" id="sabor{{$i}}">
                        @foreach ($sabores as $sabor)
                        <option value="{{ $sabor->id }}">
                            {{ $sabor->nombre }} de {{ $sabor->marca}}
                        </option>
                        @endforeach
                    </select>

                    <p class="card-text">Elige el sabor e indica la cantidad que quieres ponerle.</p>
                    <div class="form-group">
                        <label>Porcentaje del primer sabor:</label>
                        <input type="number" class="form-control text-center mt-3" name="porcentaje{{$i}}" id="porcentaje{{$i}}" value="" min="0" max="100" step="10">
                    </div>

                </div>
        </div>
        @elseif($i == 3)


        <div class="card-body text-light">
            <select class="form-control form-control-lg card-title" name="sabor{{$i}}" id="sabor{{$i}}">
                @foreach ($sabores as $sabor)
                <option value="{{ $sabor->id }}">
                    {{ $sabor->nombre }} de {{ $sabor->marca}}
                </option>
                @endforeach
            </select>

            <p class="card-text">Elige el sabor e indica la cantidad que quieres ponerle.</p>
            <div class="form-group">
                <label>Porcentaje del primer sabor:</label>
                <input type="number" class="form-control text-center mt-3" name="porcentaje{{$i}}" id="porcentaje{{$i}}" value="" min="0" max="100" step="10">
            </div>


        </div>
</div>
@endif
</div>
@endfor
</div>

<div class="form-group">
    <input type="hidden" class="form-control" name="usuario" id="usuario" value="{{$userid}}">
</div>


@if(auth()->check())
<input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
@endif
</form>
</div>
@endsection
