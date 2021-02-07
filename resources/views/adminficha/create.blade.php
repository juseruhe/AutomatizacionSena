 @extends('layouts.app')

 @section('content')

     <form action="{{route('adminficha.store')}}" method="post" class="has-text-centered mb-4 mt-3 ">
         @csrf
         <table class="table is-fullwidth">
             <tr>
         <h2 class="is-size-2 has-text-centered"> Registrar una ficha</h2>

         <td>
            <div class="field">
                <label for="jornada" class="label is-size-3 "> Jornada</label>
                <div class="control">

                <select name="jornada_id" class="select" >
                @foreach($jornadas as $jornada)
                <option value="{{$jornada->id}}">{{$jornada->nombre}}</option>
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
             <label for="id_ficha_de_caracterizacion" class="label is-size-3 "> Ficha: </label>
             <div class="control">
             <input type="text" class="input is-success " name="ficha_caracterizacion" placeholder="Identificador de caracter">
             </div>
           </td>


          <td>
             <label for="Estado" class="label is-size-3 "> Estado</label>
             <div class="control">
             <select name="estado_id" class="select">
             @foreach($estados as $estado)
              <option value="{{$estado->id}}">{{$estado->nombre}}</option>
             @endforeach
             </select>
             </div>
             </div>
          </td>
             </tr>
         </table>

         <input type="submit" class="button is-success " value="Crear ficha">
         <a class="button has-background-grey has-text-white" href="#"> Ver / Mostrar fichas</a>
     </form>
 @endsection
