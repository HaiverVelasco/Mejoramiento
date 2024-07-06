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
                <th>DNI</th>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
                <th colspan="3"></th>
            </tr>
            @foreach ($viajeroo as $Viajero)
            <tr>
                <td>{{$Viajero->id}}</td>   
                <td>{{$Viajero->DNI}}</td>
                <td>{{$Viajero->nombre}}</td>
                <td>{{$Viajero->direccion}}</td>
                <td>{{$Viajero->telefono}}</td>
                <td><a href="{{route('viajeroo.show',$Viajero->id)}}">Mostrar</a></td>
                <td><a href="{{route('viajeroo.edit',$Viajero->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('viajeroo.destroy',$Viajero->id)}}" method="POST">
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
