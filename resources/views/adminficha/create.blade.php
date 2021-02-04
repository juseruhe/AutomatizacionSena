 @extends('layouts.app')

 @section('content')

     <form action="{{route('adminficha.store')}}" method="post" class="has-text-centered mb-4 mt-3 ">
         @csrf
         <h2 class="is-size-2 has-text-centered"> Registrar una ficha</h2>
         <div class="field">
            <label for="Numero de ficha" class="label is-size-3 "> Jornada</label>
            <div class="control">
                 <input type="text" class="input is-success " name="jornada" placeholder="Tipo de jornada">
             </div>
             <label for="caracter" class="label is-size-3 "> Caracter</label>
             <div class="control">
                 <input type="text" class="input is-success " name="caracter" placeholder="Numero de caracter">
             </div>
             <label for="Estado" class="label is-size-3 "> Estado del aprendiz</label>
             <div class="control">
                 <input type="text" class="input is-success " name="estado" placeholder="Estado del aprendiz">
             </div>
         </div>
         <input type="submit" class="button is-success " value="Crear ficha">
         <a class="button has-background-grey has-text-white" href="#"> Ver / Mostrar fichas</a>
     </form>
 @endsection
