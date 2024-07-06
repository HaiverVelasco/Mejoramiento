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
    <form action="{{route('clientee.client')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite el Telefono:
            <input type="integer" name="telefono" >
        </label>
        <br><br>
        <label>
            Digite el Codigo:
            <input type="integer" name="codigo" >
        </label>
        <br><br>
        <label>
            Digite el Numero Social:
            <input type="integer" name="num_social">
        </label>
        <br><br>
        <label>
           Escriba la Direccion:
            <input type="text" name="direccion" >
        </label>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>
    </center>
</body>
</html>