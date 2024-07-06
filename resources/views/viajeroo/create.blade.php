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
    <h1> REGUISTRO VIAJERO</h1>
    <form action="{{route('viajeroo.traveler')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite el DNI:
            <input type="integer" name="DNI" >
        </label>
        <br><br>
        <label>
            Escriba su Nombre:
            <input type="string" name="nombre" >
        </label>
        <br><br>
        <label>
            Digite su Direccion:
            <input type="text" name="direccion">
        </label>
        <br><br>
        <label>
            Digite su Telefono:
            <input type="integer" name="telefono">
        </label>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>
    </center>
</body>
</html>