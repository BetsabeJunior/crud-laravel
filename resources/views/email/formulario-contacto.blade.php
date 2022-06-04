<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Nuevo</title>
</head>
<body>
    <p>Nuevo Mensaje De: {{$mensaje{'nombre'}}} - {{$mensaje{'correo'}}}</p>
    <p>Asunto: <strong>{{$mensaje{'asunto'}}}</strong></p>
    <p>Asunto: {{$mensaje{'mensaje'}}}</p>
</body>
</html>