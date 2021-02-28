@extends('layouts.app')

@section('content')

    <form action="{{route('instructor.store')}}" method="post" class="has-text-centered mb-4 mt-3 " enctype="multipart/form-data">
        @csrf
        <table class="table is-fullwidth">
            <tr>
        <h2 class="is-size-2 has-text-centered"> Registrar un Instructor</h2>

        
           <div class="field">
               <label for="jornada" class="label is-size-3 "> Número Documento</label>
               <div class="control">
            <input type="number" class="input is-success " name="documento" placeholder="">
            </div>


            <div class="field">
               <label for="jornada" class="label is-size-3 "> Nombres</label>
               <div class="control">
            <input type="text" class="input is-success " name="nombres" placeholder="">
            </div>


            <div class="field">
               <label for="jornada" class="label is-size-3 "> Apellidos</label>
               <div class="control">
            <input type="text" class="input is-success " name="apellidos" placeholder="">
            </div>

            <div class="field">
               <label for="jornada" class="label is-size-3 "> Correo</label>
               <div class="control">
            <input type="email" class="input is-success " name="correo" placeholder="">
            </div>

            <div class="field">
               <label for="jornada" class="label is-size-3 "> Fecha de Nacimiento</label>
               <div class="control">
            <input type="date" class="input is-success " name="fecha_nacimiento" placeholder="">
            </div>

            <div class="field">
               <label for="jornada" class="label is-size-3 "> Tipo de Documento</label>
               <div class="control">
               <select class="input" name="tipo_documento">
               @foreach($tipo_documentos as $tipo_documento)
               <option value="{{$tipo_documento}}">{{$tipo_documento}}</option>
               @endforeach
               </select>
            </div>


            <div class="field">
               <label for="jornada" class="label is-size-3 "> Género</label>
               <div class="control">
               <select class="input" name="genero">
               @foreach($generos as $genero)
               <option value="{{$genero}}">{{$genero}}</option>
               @endforeach
               </select>
            </div>

            <div class="field">
               <label for="jornada" class="label is-size-3 "> Estado</label>
               <div class="control">
               <select class="input" name="estado_id">
               @foreach($estados as $estado)
               <option value="{{$estado->id}}">{{$estado->nombre}}</option>
               @endforeach
               </select>
            </div>

            <div class="field">
               <label for="jornada" class="label is-size-3 "> Foto</label>
               <div class="control">
            <input type="file" class="input is-success " name="foto" placeholder="">
            </div>





            <input class="button has-background-success my-4 has-text-white" type="submit" value="Registrar Instructor">





             
@endsection
