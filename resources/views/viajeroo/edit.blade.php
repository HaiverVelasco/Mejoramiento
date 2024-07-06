<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
    <form action="{{route('viajeroo.update', $viajeroo)}}"  method="POST">
        @csrf
        @method('put')
        <label>
            Digite el codigo:
        <br>
        <input name="DNI" type="integer" value="{{old('DNI',$viajeroo->DNI) }}">
        <br>
        </label>
        <br>
        <label>
            Escriba su Nombre:
        <br>
        <input name="nombre" type="string" value="{{old('nombre',$viajeroo->nombre)}}">
        <br>
        </label>
        <br>
        <label>
            Digite su Direccion:
            <br>
            <input name="direccion" type="text" value="{{old('direccion',$viajeroo->direccion)}}">
            <br>
            </label>
            <br>
            <label>
                Digite su Numero:
                <br>
                <input name="telefono" type="integer" value="{{old('telefono',$viajeroo->telefono)}}">
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