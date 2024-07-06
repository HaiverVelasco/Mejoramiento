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
    <h1> REGUISTRE ORIGEN</h1>
    <form action="{{route('viajee.travel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite el codigo:
            <input type="integer" name="codigo" >
        </label>
        <br><br>
        <label>
            Escriba Nombre del Origen:
            <input type="string" name="nombre" >
        </label>
        <br><br>
        <label>
            Otros Datos:
            <input type="text" name="otros_datos">
        </label>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>
    </center>
</body>
</html>