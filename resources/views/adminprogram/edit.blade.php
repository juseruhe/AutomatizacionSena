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
                    <input type="text" name="nombre" class="input" value="{{$programa->nombre}}">

                </td>

                    <td>
                   <label  class="label is-size-4 has-text-centered" for="#"> Código </label>
                   <input type="text" class="input" name="codigo_programa" value="{{$programa->codigo_programa}}" placeholder="#">
               </td>       
                
               <td>
                   <label  class="label is-size-4 has-text-centered" for="#"> Siglas </label>
                   <input type="text" class="input" name="siglas" value="{{$programa->siglas}}" placeholder="#">
               </td>

              

             
            </tr>
        </table>
        <input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Ficha" style="margin:0px auto; display:block;">
     </form>


     @endforeach

@endsection
