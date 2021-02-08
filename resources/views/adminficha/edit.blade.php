@extends('layouts.app')

@section('content')



@foreach($adminfichas as $adminficha)
<form action="{{route('adminficha.update',$adminficha->id)}}" method="post" class="has-text-centered mb-4 mt-3">

@csrf
@method('PUT')

<h2 class="is-size-2 has-text-centered"> Actualizar una Ficha</h2>
<table class="table is-fullwidth">
    <tr>
        <td>
            <label  class="label is-size-4 has-text-centered" for="jornada"> Jornada: </label>
            <select name="jornada_id" class="select">
            <option type="text" value="{{$adminficha->jornada_id}}"> {{$adminficha->jornada->nombre}} </option>
            @foreach($jornadas as $jornada)
            <option value="{{$jornada->id}}">{{$jornada->nombre}}</option>
            @endforeach
            </select>
        </td>

        <td>
            <label  class="label is-size-4 has-text-centered" for="nombre"> Programa: </label>
            <select name="programa_id" class="select">
            <option type="text" value="{{$adminficha->programa_id}}"> {{$adminficha->programa->nombre}} </option>
            @foreach($programas as $programa)
            <option value="{{$programa->id}}">{{$programa->nombre}}</option>
            @endforeach
            </select>
        </td>

        <td>
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Ficha: </label>
            <input type="text" class="input" name="ficha_caracterizacion" value="{{$adminficha->ficha_caracterizacion}}" placeholder="ficha">
        </td>

        <td>
            <label  class="label is-size-4 has-text-centered" for="estado"> Estado: </label>
            <p type="text" class="has-text-centered has-text-dark is-size-50" name="estado">{{$adminficha->estado->nombre}}</p>
        </td>
    </tr>
</table>
    <input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Ficha">

</form>
@endforeach
@endsection
