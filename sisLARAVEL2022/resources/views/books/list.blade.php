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



 </style>
<body>
    <table>
     <tr>
        <td>id</td>
        <td>Nombre del libro</td>
        <td>autor</td>


     </tr>
     @foreach ($libros as $item)


     <tr class="resultado_tabla">
        <td>{{$item->id}}</td>
        <td>{{$item->libro_nombre}}</td>
        <td>{{$item->Autor}}</td>



     </tr>
     @endforeach
    </table>


</body>
</html>
