<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <a href="/user/create">Criar Usuario</a>
    @foreach($usuarios as $item)
        <h3>{{$item->id}} - {{$item->name}}</h3>
        <a href="/usuario/{{$item->id}}">Ver usuario</a>
        <hr/>
    @endforeach
</body>
</html>