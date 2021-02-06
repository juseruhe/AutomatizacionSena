@extends('layouts.app')

@section('content')



@foreach($adminfichas as $adminficha)
<form action="{{route('adminficha.update',$adminficha->id)}}" method="post">

@csrf
@method('PUT')

<h2 class="is-size-2 has-text-centered"> Actualizar una Ficha</h2>
<table>
    <tr>
        <td>
            <label  class="label is-size-4 has-text-centered" for="jornada"> Jornada: </label>
            <input type="text" class="input" name="jornada" value="{{$adminficha->jornada}}">
        </td>

        <td>
            <label  class="label is-size-4 has-text-centered" for="nombre"> Nombre: </label>
            <input type="text" class="input" name="nombre" value="{{$adminficha->nombre}}">
        </td>

        <td>
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Id de ficha: </label>
            <input type="text" class="input" name="id_ficha_de_caracterizacion" value="{{$adminficha->id_ficha_de_caracterizacion}}" placeholder="ficha">
        </td>

        <td>
            <label  class="label is-size-4 has-text-centered" for="programa_de_formacion"> Programa: </label>
            <input type="text" class="input" name="programa_de_formacion" value="{{$adminficha->programa_de_formacion}}" placeholder="programa">
        </td>

        <td>
            <label  class="label is-size-4 has-text-centered" for="estado"> Estado: </label>
            <p type="text" class="has-text-centered has-text-dark is-size-50" name="estado">{{$adminficha->estado}}</p>
        </td>
    </tr>
</table>
    <input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Ficha">

</form>






@endforeach




@endsection
