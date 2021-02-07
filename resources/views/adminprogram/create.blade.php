@extends('layouts.app')

@section('content')

    <form action="{{route('adminprogram.store')}}" method="post" class="has-text-centered mb-4 mt-3 ">
        @csrf
        <table>
            <tr>
                <h2 class="is-size-2 has-text-centered"> Registrar programa</h2>

                <td>
                    <div class="field">
                        <label for="nombre" class="label is-size-3 "> Nombre de programa</label>
                        <div class="control">
                            <select name="programas_id" class="select" >
                                @foreach($programas as $programa)
                                    <option value="{{$programa->id}}">{{$programa->nombre}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </td>

                <td>
                    <div class="field">
                        <label for="nombre" class="label is-size-3 "> Programa</label>
                        <div class="control">
                            <select name="programa_id" class="select" >

                                @foreach($programas as $programa)

                                    <option value="{{$programa->id}}"> {{$programa->nombre}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                </td>

                <td>
                    <label for="nombre" class="label is-size-3 "> Nombre del programa: </label>
                    <div class="control">
                        <input type="text" class="input is-success " name="nombre" placeholder="nombre">
                    </div>
                </td>

                <td>
                    <label for="codigo_programa" class="label is-size-3 "> Codigo del programa</label>
{{--                    <div class="control">--}}
{{--                        <select name="estado_id" class="select">--}}
{{--                            @foreach($estados as $estado)--}}
{{--                                <option value="{{$estado->id}}">{{$estado->nombre}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    </div>
                </td>
            </tr>
        </table>

        <input type="submit" class="button is-success " value="Crear ficha">
        <a class="button has-background-grey has-text-white" href="#"> Actualizar datos</a>
    </form>
@endsection

