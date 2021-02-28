@extends('layouts.app')
@section('content')
    <div class="columns">

        <div class="column is-full">
            <h2 class="is-size-3 has-text-centered"> Instructores</h2>
        </div>
    </div>

    <div class="columns">
        <div class="column is-full" align="center">
            <a class="button has-background-info has-text-white" href="{{route('instructor.create')}}">Crear Instructor</a>
        </div>
    </div>

    <div style="position: relative;right: -300px" class="columns">

        <table class="table  is-bordered has-text-centered column is-full ml-6 mb-4 ">

            <tr class="has-text-weight-semibold is-size-5 mt-4 has-background-link has-text-white " >
                <td>ID</td>
                <td>Documento</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Correo</td>
                <td>Fecha de Nacimiento</td>
                <td>Género</td>
                <td>Tipo de Documento</td>
                <td>Estado</td>
                <td>Foto</td>
                <td>Opciones</td>
            </tr>

            <tr class="">
                @foreach($instructores as $instructor)
                    <td class="">{{$instructor->id}}</td>
                    <td class="">{{$instructor->documento}}</td>
                    <td class="">{{$instructor->nombres}}</td>
                    <td class="">{{$instructor->apellidos}}</td>
                    <td class="">{{$instructor->correo}}</td>
                    <td class="">{{$instructor->fecha_nacimiento}}</td>
                    <td class="">{{$instructor->genero}}</td>
                    <td class="">{{$instructor->tipo_documento}}</td>
                    <td class="">{{$instructor->estado->nombre}}</td>
                    <td class=""><img width="100" height="100" src="{{asset('storage').'/'. $instructor->foto}}" alt="foto"></td>
                
                    
                    
                    <td class="">

                        
                            @csrf
                            @method('DELETE')
                            <a href="{{route('instructor.edit', $instructor->id)}}" class="button has-background-warning">Actualizar</a>
                          
                    </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection

