@extends('layouts.app')

@section('content')

@foreach($adminfichas as $adminficha)
<form action="{{route('adminficha.deactivated',$adminficha->id)}}" method="post">

@csrf
@method('PUT')
<h2 class="is-size-2 has-text-centered"> Estado de una Ficha</h2>


<p class="has-text-centered has-text-success is-size-3">{{$adminficha->estado}}</p>


   <input type="checkbox" name="estado" value="activado">Activado</br>
    <input type="checkbox" name="estado" value="desactivado">Desactivado</br>
    




<input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Ficha">



</form>






@endforeach




@endsection

