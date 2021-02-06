@extends('layouts.app')

@section('content')

<div class="columns">

<div class="column is-full">
    <h2 class="is-size-3 has-text-centered"> Fichas </h2>
</div>
</div>



<div style="position: relative;right: -400px" class="columns">

<table class="table  is-bordered has-text-centered column is-full ml-6 mb-4 ">

    <tr class="has-text-weight-semibold is-size-5 mt-4 has-background-link has-text-white " >

        <td>ID</td>
        <td>Jornada</td>
        <td>Caracter</td>
        <td>Estado</td>
       

    </tr>


    <tr class="">
        @foreach($adminfichas as $adminficha)
            <td class="">{{$adminficha->id}}</td>
            <td class="">{{$adminficha->jornada}}</td>
            <td class="">{{$adminficha->caracter}}</td>
            <td class="">{{$adminficha->estado}}</td>

            
    </tr>

    @endforeach






</table>

</div>



@endsection