<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
 <style>
    table{
        display: flex;
        justify-items: center;
        justify-content: center;
        margin-top: 20px;
        width: 100%;


    }
    body{
        background:  red ;
    }
    tr{
        background: white;
        border-radius: 20px;
        padding: 50px ;
        color: yellow;
    }
    .resultado_tabla{
        background: blueviolet;

    }

    .libros{

        color: yellow;
        font-size: 40px;
        text-decoration: none;
    }

 </style>
<body>
    <table>
     <tr>
        <td>id</td>
        <td>nombre</td>
        <td>apellidos</td>
        <td>email</td>
        <td>telefono</td>
        <td>DNI</td>

     </tr>
     @foreach ($clientes as $item)


     <tr class="resultado_tabla">
        <td>{{$item->id}}</td>
        <td>{{$item->firstname}}</td>
        <td>{{$item->lastname}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->telf}}</td>
        <td>{{$item->document_dni}}</td>


     </tr>
     @endforeach
    </table>
       <div class="libros">
    <a href="/libros">librossss</a>
</div>

</body>
</html>
