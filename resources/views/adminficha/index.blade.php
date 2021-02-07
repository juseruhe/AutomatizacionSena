    @extends('layouts.app')
    @section('content')
        <div class="columns">

            <div class="column is-full">
                <h2 class="is-size-3 has-text-centered"> Fichas </h2>
            </div>
        </div>

        <div class="columns">

            <div class="column is-full" align="center">
                <a class="button has-background-info has-text-white" href="{{route('adminficha.create')}}">Crear ficha</a>

                <a class="button has-background-info has-text-white" href="{{route('adminficha.journey')}}">Filtrar Jornada</a>

                <a class="button has-background-info has-text-white" href="{{route('adminficha.program')}}">Filtrar Programa</a>

                <a class="button has-background-info has-text-white" href="{{route('adminficha.activado')}}">Filtrar Fichas Activadas/Desactivadas</a>

            </div>

        </div>

        <div style="position: relative;right: -50px" class="columns">

            <table class="table  is-bordered has-text-centered column is-full ml-6 mb-4 ">

                <tr class="has-text-weight-semibold is-size-5 mt-4 has-background-link has-text-white " >

                    <td>ID</td>
                    <td>Jornada</td>
                    <td>Modalidad</td>
                    <td>Ficha de caracterización</td>
                    <td>Programa de formación</td>
                    <td>Estado</td>
                    <td>Opciones</td>
                </tr>

                <tr class="">
                    @foreach($adminfichas as $adminficha)
                        <td class="">{{$adminficha->id}}</td>
                        <td class="">{{$adminficha->jornada->nombre}}</td>
                        <td class="">{{$adminficha->jornada->modalidad->nombre}}</td>
                        <td class="">{{$adminficha->ficha_caracterizacion}}</td>
                        <td class="">{{$adminficha->programa->nombre}}</td>
                        <td class="">{{$adminficha->estado->nombre}}</td>

                        <td class="">


                            <form action="#" method="post">

                                @csrf

                                @method('DELETE')

                                <a href="{{route('adminficha.edit',$adminficha->id)}}" class="button is-info">Actualizar</a>
                                <a href="{{route('adminficha.deactivate',$adminficha->id)}}" class="button is-warning">Activar / Desactivar</a>
{{--                                <button class="button is-danger">Eliminar</button>--}}
                            </form>
                        </td>
                </tr>

                @endforeach

            </table>

        </div>
    @endsection
