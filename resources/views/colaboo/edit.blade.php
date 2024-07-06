<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
    <form action="{{route('colaboo.update', $colaboo)}}"  method="POST">
        @csrf
        @method('put')
        <label>
            Digite su NIF:
        <br>
        <input name="NIF" type="integer" value="{{old('NIF',$colaboo->NIF) }}">
        <br>
        </label>
        <br><br>
        <label>
            Escriba su Nombre
        <br>
        <input name="nombre" type="string" value="{{old('nombre',$colaboo->nombre) }}">
        <br>
        </label>
        <br><br>
        <button  type="submit">ACTUALIZAR</button>
    </form>
    </center>
</body>
</html>
</body>
</html>