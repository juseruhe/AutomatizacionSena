<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.S.</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}" media>

<body class="is-family-primary">

@include('layouts.components.navbar')

<div class="columns">
<div class="column is-full">
<h1 class="is-size-2 has-text-centered mb-4 mt-4 has-text-weight-bold"><a href="{{route('welcome')}}">
   Automatización - Inicio</a></h1>
</div>
</div>

<div>
@yield('content')
</div>

@include('layouts.components.footer')


<script src="{{url('js/app.js')}}"></script>

</body>
</html>
