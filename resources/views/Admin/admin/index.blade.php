<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola... {{ session()->get('usuario_nom') ?? 'invitado'}}</h1>
    <a href="{{ route('logout') }}">Cerra Sesion</a>
    <h1>Bienbenidos</h1>
</body>
</html>