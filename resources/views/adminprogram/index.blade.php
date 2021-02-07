@extends('layouts.app')
@section('content')
    <div class="columns">

        <div class="column is-full">
            <h2 class="is-size-3 has-text-centered"> Programas de formación </h2>
        </div>
    </div>

    <div class="columns">
        <div class="column is-full" align="center">
            <a class="button has-background-info has-text-white" href="#">Crear programa</a>
            <a class="button has-background-info has-text-white" href="#">Actualizar datos de programa Jornada</a>
        </div>
    </div>

    <div style="position: relative;right: -50px" class="columns">

        <table class="table  is-bordered has-text-centered column is-full ml-6 mb-4 ">

            <tr class="has-text-weight-semibold is-size-5 mt-4 has-background-link has-text-white " >
                <td>ID</td>
                <td>nombre del programa</td>
                <td>Codigo del programa</td>
                <td>Siglas</td>
                <td>Opciones</td>
            </tr>

            <tr class="">
                @foreach($adminprograms as $adminprogram)
                    <td class="">{{$adminprogram->id}}</td>
                    <td class="">{{$adminprogram->nombre}}</td>
                    <td class="">{{$adminprogram->codigo_programa}}</td>
                    <td class="">{{$adminprogram->siglas}}</td>
                    <td class="">


                        <form action="{{route('welcome')}}" method="post">

                            @csrf

                            @method('DELETE')

                            <a href="{{route('adminficha.edit',$adminprogram->id)}}" class="button is-info">Actualizar</a>
{{--                            <a href="{{route('adminficha.deactivate',$adminprogram->id)}}" class="button is-warning">Eliminar</a>--}}
{{--                            <a href="{{route('adminficha.deactivate',$adminprogram->id)}}" class="button is-warning">Activar / Desactivar</a>--}}
                            {{--                                <button class="button is-danger">Eliminar</button>--}}
                        </form>
                    </td>
            </tr>

            @endforeach






        </table>

    </div>
@endsection

