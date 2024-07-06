<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
</head>
<body>
    <center>
        <h1><u>LISTA</u></h1>
        <table>
            <tr>
                <th>ID</th>
                <th>CODIGO</th>
                <th>GOLES FUERA</th>
                <th>GOLES CASA</th>
                <th>FECHA</th>
                <th colspan="3"></th>
            </tr>
            @foreach ($partidoo as $Partido)
            <tr>
                <td>{{$Partido->id}}</td>   
                <td>{{$Partido->codigo}}</td>
                <td>{{$Partido->goles_fuera}}</td>
                <td>{{$Partido->goles_casa}}</td>
                <td>{{$Partido->fecha}}</td>
                <td><a href="{{route('partidoo.show',$Partido->id)}}">Mostrar</a></td>
                <td><a href="{{route('partidoo.edit',$Partido->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('partidoo.destroy',$Partido->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar Producto</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>
