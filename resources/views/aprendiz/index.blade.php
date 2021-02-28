@extends('layouts.app')
@section('content')
    <div class="columns">

        <div class="column is-full">
            <h2 class="is-size-3 has-text-centered"> Programas de formación </h2>
        </div>
    </div>

    <div class="columns">
        <div class="column is-full" align="center">
            <a class="button has-background-info has-text-white" href="{{route('aprendiz.create')}}">Crear Aprendiz</a>
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
                <td>Opciones</td>
            </tr>

            <tr class="">
                @foreach($aprendices as $aprendiz)
                    <td class="">{{$aprendiz->id}}</td>
                    <td class="">{{$aprendiz->documento}}</td>
                    <td class="">{{$aprendiz->nombres}}</td>
                    <td class="">{{$aprendiz->apellidos}}</td>
                    <td class="">{{$aprendiz->correo}}</td>
                    <td class="">{{$aprendiz->fecha_nacimiento}}</td>
                    <td class="">{{$aprendiz->genero}}</td>
                    <td class="">{{$aprendiz->tipo_documento}}</td>
                    <td class="">{{$aprendiz->estado->nombre}}</td>
                
                    
                    
                    <td class="">

                        <form action="{{route('aprendiz.destroy', $aprendiz->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('aprendiz.edit',$aprendiz->id)}}" class="button has-background-warning">Actualizar</a>
                          <button class="button has-background-danger has-text-white">Eliminar</button>
                    </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection

