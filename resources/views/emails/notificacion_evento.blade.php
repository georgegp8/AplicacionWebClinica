<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recordatorio de Evento</title>
</head>
<body>
    <p>Hola, {{ $evento->user->name }}.</p>
    <p>Te recordamos que tienes una reserva programada:</p>
    <ul>
		<li><b>Especialidad:</b> {{ $evento->doctor->especialidad }}</li>
        <li><b>Fecha:</b> {{ \Carbon\Carbon::parse($evento->start)->format('d-m-Y') }}</li>
		<li><b>Hora:</b> {{ \Carbon\Carbon::parse($evento->start)->format('H:i') }}</li>
        <li><b>Doctor:</b> {{ $evento->doctor->nombres." ".$evento->doctor->apellidos}}</li>

        <li><b>Consultorio:</b> {{ $evento->consultorio->nombre }}</li>
    </ul>
    <p>Gracias por utilizar nuestros servicios.</p>
</body>
</html>

