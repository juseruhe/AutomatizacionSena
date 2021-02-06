 @extends('layouts.app')

 @section('content')

     <form action="{{route('adminficha.store')}}" method="post" class="has-text-centered mb-4 mt-3 ">
         @csrf
         <table>
             <tr>
         <h2 class="is-size-2 has-text-centered"> Registrar una ficha</h2>

         <td>
            <div class="field">
                <label for="jornada" class="label is-size-3 "> Jornada</label>
                <div class="control">
                <input type="text" class="input is-success " name="jornada" placeholder="Tipo de jornada">
                </div>
                </div>
         </td>

         <td>
             <div class="field">
                 <label for="nombre" class="label is-size-3 "> Nombre</label>
                 <div class="control">
                     <input type="text" class="input is-success " name="nombre" placeholder="Nombre de programa">
                 </div>
             </div>
         </td>

           <td>
             <label for="id_ficha_de_caracterizacion" class="label is-size-3 "> Id ficha</label>
             <div class="control">
             <input type="text" class="input is-success " name="id_ficha_de_caracterizacion" placeholder="Identificador de caracter">
             </div>
           </td>

           <td>
               <label for="programa_de_formacion" class="label is-size-3 "> Programa</label>
               <div class="control">
                   <input type="text" class="input is-success " name="programa_de_formacion" placeholder="Programa de formacion">
               </div>
               </div>
           </td>

          <td>
             <label for="Estado" class="label is-size-3 "> Estado</label>
             <div class="control">
             <input type="text" class="input is-success " name="estado" placeholder="Estado del aprendiz">
             </div>
             </div>
          </td>
             </tr>
         </table>

         <input type="submit" class="button is-success " value="Crear ficha">
         <a class="button has-background-grey has-text-white" href="#"> Ver / Mostrar fichas</a>
     </form>
 @endsection
