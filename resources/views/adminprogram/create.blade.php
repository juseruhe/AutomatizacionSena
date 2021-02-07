@extends('layouts.app')

@section('content')

    <form action="{{route('adminprogram.store')}}" method="post" class="has-text-centered mb-4 mt-3">
        @csrf
        <table class="table is-fullwidth">

            <tr>
                <h2 class="is-size-2 has-text-centered"> Registrar un programa</h2>

                <td>
                    <div class="field">
                        <label for="nombre" class="label is-size-3 "> Nombre del programa</label>
                        <div class="control">

                            <input type="text" name="nombre" class="input">

                        </div>
                    </div>
                </td>

                <td>
                    <div class="field">
                        <label for="codigo_programa" class="label is-size-3 "> Codigo del programa</label>
                        <div class="control">
                            <input type="number" name="codigo_programa" class="input">
                        </div>
                    </div>
                </td>

                <td>
                    <label for="siglas" class="label is-size-3 "> Siglas </label>
                    <div class="control">
                        <input type="text" style="text-transform: uppercase" class="input is-success " name="siglas" placeholder="">
                    </div>
                </td>

                <td>
                    <label for="tipo_programa" class="label is-size-3 "> Tipo de Programa</label>
                    <div class="">
                        <select name="tipo_programa_id" class="input select">
                            @foreach($tipos_programas as $tipo_programa)
                                <option value="{{$tipo_programa->id}}">
                                    {{$tipo_programa->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </td>

            </tr>
        </table>
        <input type="submit" class="button is-success " value="Crear ficha">
        <a class="button has-background-grey has-text-white" href="#"> Ver / Mostrar fichas</a>
    </form>
@endsection

