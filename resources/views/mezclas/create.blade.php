@extends('plantilla')
@section('titulo', 'Nueva Mezcla')
@section('contenido')

    <form action="{{ route('mezclas.store') }}" method="GET">
        @csrf

        <!-- This page its for create a new mixing  -->
        <div class="row imagenMezclaCreada ">

            <div class="col-12 text-light text-center mb-4">
                <h1>Crea tu nueva Mezcla</h1>
            </div>
            @for ($i = 1; $i < 4; $i++)
            <div class="col-12 col-md-4 mb-3 ">

                <div class="card text-center shadow p-3" style=" background: rgba(0,0,0,0.4);">
        
                    <div class="card-body text-light py-4 ">
                        <p class="card-text py-4 my-2">Elige el sabor e indica la cantidad que quieres ponerle.</p>
                        <input class="form-control  buscador1 my-2" list="datalistOptions" name="sabor{{$i}}" id="sabor{{$i}}" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            @foreach ($sabores as $sabor)
                            <option value="{{ $sabor->id }}">
                                {{ $sabor->nombre }} de {{ $sabor->marca}}
                            </option>
                            @endforeach
                        </datalist>
                        <div class="form-group py-4 my-2">
                            <label>Cantidad de sabor:</label>
                            <input type="number" class="form-control text-center my-2" name="porcentaje{{$i}}" id="porcentaje{{$i}}" value="" min="0" max="100" step="10">
                        </div>


                    </div>

                </div>

            @endfor
            </div>

<div class="form-group">
    <input type="hidden" class="form-control" name="usuario" id="usuario" value="{{$userid}}">
</div>


@if(auth()->check())
<div class="my-1 col-12 align-content-center justify-content-center text-center">

    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark">

</div>

@endif
</form>

</div>
</div>
@endsection
