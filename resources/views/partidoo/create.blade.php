<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Productos</title>
    <style>
     
    </style>
</head>
<body>
    <center>
    <h1> REGUISTRE PARTIDO</h1>
    <form action="{{route('partidoo.game')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite el codigo:
            <input type="integer" name="codigo" >
        </label>
        <br><br>
        <label>
            Digite los goles fuera:
            <input type="integer" name="goles_fuera" >
        </label>
        <br><br>
        <label>
            Digite los goles casa:
            <input type="integer" name="goles_casa">
        </label>
        <br><br>
        <label>
           Fecha:
            <input type="date" name="fecha" >
        </label>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>
    </center>
</body>
</html>