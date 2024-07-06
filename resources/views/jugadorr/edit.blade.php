<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
    <form action="{{route('jugadorr.update', $jugadorr)}}"  method="POST">
        @csrf
        @method('put')
        <label>
            Digite el codigo:
        <br>
        <input name="codigo" type="string" value="{{old('codigo',$jugadorr->codigo) }}">
        <br>
        </label>
        <br>
        <label>
            Digite la Fecha de Nacimiento:
        <br>
        <input name="fecha_de_nacimiento" type="date" value="{{old('fecha_de_nacimiento',$jugadorr->fecha_de_nacimiento)}}">
        <br>
        </label>
        <br>
        <label>
            Escriba el Nombre:
            <br>
            <input name="nombre" type="string" value="{{old('nombre',$jugadorr->nombre)}}">
            <br>
            </label>
            <br>
                <label>
                    Digite la Posicion:
                    <br>
                    <input name="posicion" type="text" value="{{old('posicion',$jugadorr->posicion)}}">
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