<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@extends('layouts.app')
@section('content')
    <div class="columns">

        <div class="column is-full">
            <h2 class="is-size-3 has-text-centered"> Bienvenido a la plataforma </h2>
        </div>
    </div>

    <div class="columns">

        <div class="column is-full" align="center">
            <a class="button has-background-info has-text-white" href="{{route('adminficha.index')}}">Seccion ficha</a>
            <a class="button has-background-info has-text-white" href="{{route('adminprogram.index')}}">Seccion ficha</a>

{{--            <a class="button has-background-info has-text-white" href="{{route('adminprogram.index')}}">Seccion programas</a>--}}

{{--            <a class="button has-background-info has-text-white" href="{{route('adminficha.program')}}">Filtrar Programa</a>--}}

{{--            <a class="button has-background-info has-text-white" href="{{route('adminficha.activado')}}">Filtrar Fichas Activadas/Desactivadas</a>--}}

        </div>

    </div>

    <div style="position: relative;right: -50px" class="columns">

        <table class="table  is-bordered has-text-centered column is-full ml-6 mb-4 ">

            <tr class="has-text-weight-semibold is-size-5 mt-4 has-background-link has-text-white " >

            </tr>

            <tr class="">
        </table>

    </div>
@endsection


</html>
