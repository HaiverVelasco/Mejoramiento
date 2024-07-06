<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
    <form action="{{route('clientee.update', $clientee)}}"  method="POST">
        @csrf
        @method('put')
        <label>
            Digite el telefono:
        <br>
        <input name="telefono" type="integer" value="{{old('telefono',$clientee->telefono) }}">
        <br>
        </label>
        <br><br>
        <label>
            Digite el codigo:
        <br>
        <input name="codigo" type="integer" value="{{old('codigo',$clientee->codigo) }}">
        <br>
        </label>
        <br><br>
        Digite el Numero Social:
            <br>
            <input name="num_social" type="integer" value="{{old('num_social',$clientee->num_social)}}">
            <br>
            </label>
            <br>
                <label>
                    Escriba la Direccion:
                    <br>
                    <input name="direccion" type="text" value="{{old('direccion',$clientee->direccion)}}">
                    <br>
                    </label>
                    <br>
                    <label>
        <button  type="submit">ACTUALIZAR</button>
    </form>
    </center>
</body>
</html>
</body>
</html>