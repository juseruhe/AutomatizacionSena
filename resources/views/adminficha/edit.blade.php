@extends('layouts.app')

@section('content')

@foreach($adminfichas as $adminficha)
<form action="{{route('adminficha.update',$adminficha->id)}}" method="post">

@csrf
@method('PUT')
<h2 class="is-size-2 has-text-centered"> Actualizar una Ficha</h2>

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Jornada: </label>
<input type="text" class="input" name="jornada" value="{{$adminficha->jornada}}" placeholder="Escribe la ciudad">


<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Carácter: </label>
<input type="text" class="input" name="caracter" value="{{$adminficha->caracter}}" placeholder="Escribe la ciudad">


<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Estado: </label>
<p class="has-text-centered has-text-dark is-size-5">{{$adminficha->estado}}</p>





<input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Ficha">



</form>






@endforeach




@endsection
