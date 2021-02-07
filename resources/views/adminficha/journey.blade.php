@extends('layouts.app')

@section('content')

<div class="columns">

<div class="column is-full">
    <h2 class="is-size-3 has-text-centered"> Filtro por Programas</h2>
</div>
</div>

<form action="{{route('adminficha.jornadas')}} method="get">

<label for="jornadas">Jornadas</label>

<select name="jornada_id" >
@foreach($jornadas as $jornada)

<option value="{{$jornada->id}}">{{$jornada->nombre}}</option>
@endforeach

</select>

<input class="button has-background-success" type="submit" value="Filtrar">

</form>




<div style="position: relative;right: -400px" class="columns">

<table class="table  is-bordered has-text-centered column is-full ml-6 mb-4 ">

    <tr class="has-text-weight-semibold is-size-5 mt-4 has-background-link has-text-white " >

        <td>N°</td>
        <td>Jornada</td>
        <td>Ficha</td>
        <td>Siglas</td>
        <td>Estado</td>
       

    </tr>


    <tr class="">
        @foreach($adminfichas as $adminficha)
            <td class="">{{$adminficha->id}}</td>
            <td class="">{{$adminficha->jornada->nombre}}</td>
            <td class="">{{$adminficha->ficha_caracterizacion}}</td>
            <td>{{$adminficha->programa->siglas}}</td>
            <td class="">{{$adminficha->estado->nombre}}</td>

            
    </tr>

    @endforeach


   



</table>




</div>

<a style="position: relative; right:-500px;" class="button is-size-5 has-background-grey has-text-centered has-text-white mb-4" href="{{route('adminficha.index')}}">Volver a Fichas</a>


@endsection