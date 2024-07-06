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
    <form action="{{route('jugadorr.player')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite la Fecha de Nacimiento:
            <input type="date" name="fecha_de_nacimiento" >
        </label>
        <br><br>
        <label>
            Digite el Codigo:
            <input type="integer" name="codigo" >
        </label>
        <br><br>
        <label>
            Escriba el Nombre:
            <input type="string" name="nombre">
        </label>
        <br><br>
        <label>
           Digite la Posicion:
            <input type="text" name="posicion" >
        </label>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>
    </center>
</body>
</html>