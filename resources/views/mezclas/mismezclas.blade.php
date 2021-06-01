@extends('plantilla')
@section('titulo', 'Tus Mezclas Favoritas ♡')
@section('contenido')
<div class="container-fluid" style="height: 100vh;">
@if($errors->any())

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{$errors->first()}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


@endif
    <div class="row m-4">
        <h1>Tus Mezclas</h1>
    </div>
<!-- This page shows all of your favourite mixings -->
    <div class="table-responsive">

        <table class="table table-striped">

            <tr>
                <th>#</th>

                <th>Sabores</th>

                <th>Porcentajes</th>

                <th></th>

            </tr>

            @forelse($mezclasFavoritas as $mezclaFavorita)

            @if($mezclaFavorita->usuario->login == auth()->user()->login )

            <tr>

                <td>{{ $contador++ }} </td>



                <td>
                    <!-- @forelse($sabores as $sabor)

                    @switch($sabor->id)
                    @case($mezclaFavorita->mezcla->sabor1)
                    <span>{{$sabor->nombre}}</span>
                    @break

                    @case($mezclaFavorita->mezcla->sabor2)
                    <span>, {{$sabor->nombre}}</span>
                    @break

                    @case($mezclaFavorita->mezcla->sabor3)

                    @if($sabor->nombre)
                    <span>, {{$sabor->nombre}}</span>
                    @endif

                    @break

                    @default

                    @endswitch
                    @empty
                    @endforelse -->
                </td>


                <td>{{$mezclaFavorita->mezcla->porcentaje1}}%, {{$mezclaFavorita->mezcla->porcentaje2}}%
                    @if($mezclaFavorita->mezcla->porcentaje3)
                    <span>, {{$mezclaFavorita->mezcla->porcentaje3}}%</span>
                    @endif
                </td>

                <td>
                    <a href="{{ route('mezclas.destroy', $mezclaFavorita->mezcla->id) }}" class="m-1 "><input type="button" class="btn btn-dark btn-circle" value="-" style="color: white;  width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;"> </input></a>
                </td>

            </tr>


            @endif
            @empty
            @endforelse


        </table>
    </div>

</div>
@endsection