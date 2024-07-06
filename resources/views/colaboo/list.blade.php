<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
</head>
<body>
    <center>
        <h1><u>LISTA COLABORADOR</u></h1>
        <table>
            <tr>
                <th>ID</th>
                <th>NIF</th>
                <th>NOMBRE</th>
                <th colspan="3"></th>
            </tr>
            @foreach ($colaboo as $Colaborador)
            <tr>
                <td>{{$Colaborador->id}}</td>   
                <td>{{$Colaborador->NIF}}</td>
                <td>{{$Colaborador->nombre}}</td>
                <td><a href="{{route('colaboo.show',$Colaborador->id)}}">Mostrar</a></td>
                <td><a href="{{route('colaboo.edit',$Colaborador->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('colaboo.destroy',$Colaborador->id)}}" method="POST">
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
