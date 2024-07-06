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
                <th>NOMBRE ORIGEN</th>
                <th>OTROS DATOS</th>
                <th colspan="3"></th>
            </tr>
            @foreach ($viajee as $Origen)
            <tr>
                <td>{{$Origen->id}}</td>   
                <td>{{$Origen->codigo}}</td>
                <td>{{$Origen->nombre}}</td>
                <td>{{$Origen->otros_datos}}</td>
                <td><a href="{{route('viajee.show',$Origen->id)}}">Mostrar</a></td>
                <td><a href="{{route('viajee.edit',$Origen->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('viajee.destroy',$Origen->id)}}" method="POST">
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
