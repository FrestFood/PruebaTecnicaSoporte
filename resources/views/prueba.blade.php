<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prueba tecnica</title>

</head>

<body class="invisible">
    <h1>Nombre: {{ $aplicante['nombre'] }}</h1>
     @if ($aplicante['aprobado'])
        <h2>APROBADO</h2>
        @else
            <h2>REPROBADO</h2>
    @endif
</body>

</html>
<style>
    .invisible {
        display: block;
    }
</style>
