@extends('layouts.app')

@section('content')



@foreach($instructores as $instructor)
<form action="{{route('instructor.update', $instructor->id)}}" method="post" class="has-text-centered mb-4 mt-3" enctype="multipart/form-data">

@csrf
@method('PUT')

<h2 class="is-size-2 has-text-centered"> Actualizar un Aprendiz</h2>


<div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Número de Documento: </label>
            <input type="text" class="input" name="documento" value="{{$instructor->documento}}" placeholder="ficha">
            </div>  

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Nombres: </label>
            <input type="text" class="input" name="nombres" value="{{$instructor->nombres}}" placeholder="ficha">
            </div>  

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Apellidos: </label>
            <input type="text" class="input" name="apellidos" value="{{$instructor->apellidos}}" placeholder="ficha">
            </div

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Correo: </label>
            <input type="text" class="input" name="correo" value="{{$instructor->correo}}" placeholder="ficha">
            </div

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Fecha de Nacimiento: </label>
            <input type="text" class="input" name="fecha_nacimiento" value="{{$instructor->fecha_nacimiento}}" placeholder="año-mes-día">
            </div

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Tipo de Documento: </label>
           <select class="input" name="tipo_documento" >
           <option value="{{$instructor->tipo_documento}}">{{$instructor->tipo_documento}}</option>
           @foreach($tipo_documentos as $tipo_documento)
           <option value="{{$tipo_documento}}">{{$tipo_documento}}</option>
           @endforeach
           </select>
            </div


            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Género: </label>
           <select class="input" name="genero" >
           <option value="{{$instructor->genero}}">{{$instructor->genero}}</option>
           @foreach($generos as $genero)
           <option value="{{$genero}}">{{$genero}}</option>
           @endforeach
           </select>
            </div

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Estado: </label>
           <select class="input" name="estado_id" >
           <option value="{{$instructor->estado_id}}">{{$instructor->estado->nombre}}</option>
           @foreach($estados as $estado)
           <option value="{{$estado->id}}">{{$estado->nombre}}</option>
           @endforeach
           </select>
            </div>

            <div class="form-control">
            <label  class="label is-size-4 has-text-centered" for="id_ficha_de_caracterizacion"> Foto: </label>
            <img width="100" src="{{asset('storage').'/'. $instructor->foto}}" alt="Foto" class="my-4 mx-4">
            <input type="file" name="foto">
            </div>



<div class="form-control">
    <input type="submit" class="button is-warning mx-4 my-4" value="Actualizar  Instructor">
    </div>

</form>
@endforeach
@endsection
