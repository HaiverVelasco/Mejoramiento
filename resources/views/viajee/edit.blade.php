<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
    <form action="{{route('viajee.update', $viajee)}}"  method="POST">
        @csrf
        @method('put')
        <label>
            Digite el codigo:
        <br>
        <input name="codigo" type="integer" value="{{old('codigo',$viajee->codigo) }}">
        <br>
        </label>
        <br>
        <label>
            Escriba Nombre del Origen:
        <br>
        <input name="nombre" type="string" value="{{old('nombre',$viajee->nombre)}}">
        <br>
        </label>
        <br>
        <label>
            Otros Datos:
            <br>
            <input name="otros_datos" type="text" value="{{old('otros_datos',$viajee->otros_datos)}}">
            <br>
            </label>
            <br>
        <button  type="submit">ACTUALIZAR</button>
    </form>
    </center>
</body>
</html>
</body>
</html>