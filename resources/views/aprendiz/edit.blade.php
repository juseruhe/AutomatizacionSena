@extends('layouts.app')

@section('content')



@foreach($aprendices as $aprendiz)
<form action="{{route('aprendiz.update',$aprendiz->id)}}" method="post" class="has-text-centered mb-4 mt-3">

@csrf
@method('PUT')

<h2 class="is-size-2 has-text-centered"> Actualizar un Aprendiz</h2>


<div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Número de Documento: </label>
            <input type="text" class="input" name="documento" value="{{$aprendiz->documento}}" placeholder="ficha">
            </div>  

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Nombres: </label>
            <input type="text" class="input" name="nombres" value="{{$aprendiz->nombres}}" placeholder="ficha">
            </div>  

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Apellidos: </label>
            <input type="text" class="input" name="apellidos" value="{{$aprendiz->apellidos}}" placeholder="ficha">
            </div

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Correo: </label>
            <input type="text" class="input" name="correo" value="{{$aprendiz->correo}}" placeholder="ficha">
            </div

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Fecha de Nacimiento: </label>
            <input type="text" class="input" name="fecha_nacimiento" value="{{$aprendiz->fecha_nacimiento}}" placeholder="año-mes-día">
            </div

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Tipo de Documento: </label>
           <select class="input" name="tipo_documento" >
           <option value="{{$aprendiz->tipo_documento}}">{{$aprendiz->tipo_documento}}</option>
           @foreach($tipo_documentos as $tipo_documento)
           <option value="{{$tipo_documento}}">{{$tipo_documento}}</option>
           @endforeach
           </select>
            </div


            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Género: </label>
           <select class="input" name="genero" >
           <option value="{{$aprendiz->genero}}">{{$aprendiz->genero}}</option>
           @foreach($generos as $genero)
           <option value="{{$aprendiz->genero}}">{{$aprendiz->genero}}</option>
           @endforeach
           </select>
            </div

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Estado: </label>
           <select class="input" name="estado_id" >
           <option value="{{$aprendiz->estado_id}}">{{$aprendiz->estado->nombre}}</option>
           @foreach($estados as $estado)
           <option value="{{$estado->id}}">{{$estado->nombre}}</option>
           @endforeach
           </select>
            </div

<div class="form-control">
    <input type="submit" class="button is-warning mx-4 my-4" value="Actualizar Aprendiz">
    </div>

</form>
@endforeach
@endsection
