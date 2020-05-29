<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencias</title>
</head>
<body>
    <h1>Asistencias de alumnos</h1>
    @foreach($asistencias as $asistencia)
        <ul>
            <li>{{$asistencia->nombre_alumno}}</li>
            <li>{{$asistencia->carrera}}</li>
            <li>{{$asistencia->promedio}}</li>
        </ul>
    @endforeach
    
</body>
</html>