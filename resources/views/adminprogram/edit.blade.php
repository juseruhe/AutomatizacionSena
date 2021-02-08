@extends('layouts.app')

@section('content')

    @foreach($programas as $programa)
    <form action="{{route('adminprogram.update',$programa->id)}}" method="post" class="has-text-centered mb-4 mt-3">
@csrf
        @method('PUT')

        <h2 class="is-size-2 has-text-centered">  Actualizar datos de programa</h2>
        <table class="table is-fullwidth">
            <tr>
                <td>
                    <label  class="label is-size-4 has-text-centered" for="nombre"> Nombre de programa </label>
                    <input type="text">

                        @endforeach
                    </select>
                </td>

{{--                <td>--}}
{{--                    <label  class="label is-size-4 has-text-centered" for="#"> Codigo del programa </label>--}}
{{--                    <select name="" class="select">--}}
{{--                        <option type="text" value="#"> # </option>--}}

{{--                            <option value="#">#</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </td>--}}

{{--                <td>--}}
{{--                    <label  class="label is-size-4 has-text-centered" for="#"> Siglas </label>--}}
{{--                    <input type="text" class="input" name="#" value="#" placeholder="#">--}}
{{--                </td>--}}
            </tr>
        </table>
        <input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Ficha" style="margin:0px auto; display:block;>
     </form>
{{--    @endforeach--}}
@endsection
