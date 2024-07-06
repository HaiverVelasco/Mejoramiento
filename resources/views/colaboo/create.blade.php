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
    <form action="{{route('colaboo.helper')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite su NIF:
            <input type="integer" name="NIF" >
        </label>
        <br><br>
        <label>
            Escriba su Nombre:
            <input type="string" name="nombre" >
        </label>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>
    </center>
</body>
</html>