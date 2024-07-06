<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
</head>
<body>
    <center>
        <h1><u>LISTA CLIENTE</u></h1>
        <table>
            <tr>
                <th>ID</th>
                <th>TELEFONO</th>
                <th>NOMBRE</th>
                <th>CODIGO</th>
                <th>NUM_SOCIAL</th>
                <th>DIRECCION</th>
                <th colspan="3"></th>
            </tr>
            @foreach ($clientee as $Cliente)
            <tr>
                <td>{{$Cliente->id}}</td>   
                <td>{{$Cliente->telefono}}</td>
                <td>{{$Cliente->codigo}}</td>
                <td>{{$Cliente->num_social}}</td>
                <td>{{$Cliente->direccion}}</td>
                <td><a href="{{route('clientee.show',$Cliente->id)}}">Mostrar</a></td>
                <td><a href="{{route('clientee.edit',$Cliente->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('clientee.destroy',$Cliente->id)}}" method="POST">
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
