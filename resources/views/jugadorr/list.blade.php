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
                <th>Fecha de Nacimiento</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Posicion</th>
                <th colspan="3"></th>
            </tr>
            @foreach ($jugadorr as $Jugador)
            <tr>
                <td>{{$Jugador->id}}</td>   
                <td>{{$Jugador->fecha_de_nacimiento}}</td>
                <td>{{$Jugador->codigo}}</td>
                <td>{{$Jugador->nombre}}</td>
                <td>{{$Jugador->posicion}}</td>
                <td><a href="{{route('jugadorr.show',$Jugador->id)}}">Mostrar</a></td>
                <td><a href="{{route('jugadorr.edit',$Jugador->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('jugadorr.destroy',$Jugador->id)}}" method="POST">
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
