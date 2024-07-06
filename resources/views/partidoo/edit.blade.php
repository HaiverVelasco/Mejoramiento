<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
    <form action="{{route('partidoo.update', $partidoo)}}"  method="POST">
        @csrf
        @method('put')
        <label>
            Digite el codigo:
        <br>
        <input name="codigo" type="string" value="{{old('codigo',$partidoo->codigo) }}">
        <br>
        </label>
        <br>
        <label>
            Digite el numero de goles de fuera:
        <br>
        <input name="goles_fuera" type="integer" value="{{old('goles_fuera',$partidoo->goles_fuera)}}">
        <br>
        </label>
        <br>
        <label>
            Digite el numero de goles de casa:
            <br>
            <input name="goles_casa" type="integer" value="{{old('goles_casa',$partidoo->goles_casa)}}">
            <br>
            </label>
            <br>
                <label>
                    Fecha:
                    <br>
                    <input name="fecha" type="date" value="{{old('fecha',$partidoo->fecha)}}">
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