<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Doctores</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            text-decoration: underline;
            font-size: 16pt;
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 12pt;
        }

        /* Estilos para la tabla de datos del personal médico */
        table.data-table,
        th,
        td {
            border: 1px solid #dddddd;  /* Bordes para la tabla de datos */
        }

        th,
        td {
            padding: 8px;
        }

        th {
            text-align: center;
            background-color: #e7e7e7;
            font-weight: bold;
        }

        td {
            text-align: left;
        }

        td:first-child {
            text-align: center;
        }

        .logo {
            width: 80px; /* Ajusta el tamaño del logo */
        }

        /* Tabla para los datos de la clínica y el logo */
        .header-table {
            width: 100%;
            margin-bottom: 20px;
            border: 0; /* Sin bordes en la tabla de configuración */
        }

        /* Contenedor para la información de la clínica */
        .header-table td {
            text-align: left;  /* Alineación izquierda para toda la tabla de configuración */
            padding: 5px;
            vertical-align: top;
        }

        .header-table .logo-cell {
            text-align: right;  /* Alineación derecha para el logo */
        }

        /* Ajustes para evitar bordes innecesarios */
        .header-table td img {
            max-width: 100%;
            height: auto;
            border: none;
        }

        /* Alineación centrada dentro de la celda */
        .header-info {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Datos de la configuración de la clínica y logo en una tabla -->
    <table class="header-table">
        <tr>
            <td class="header-info">
                <strong>{{ $configuracion->nombre }}</strong><br>
                {{ $configuracion->direccion }}<br>
                {{ $configuracion->telefono }}<br>
                {{ $configuracion->correo }}<br>
            </td>
            <td class="logo-cell">
                <img src="{{ public_path('storage/' . $configuracion->logo) }}" alt="logo" class="logo">
            </td>
        </tr>
    </table>

    <h2><u>Listado de todas las reservas médicas</u></h2>

	<br>

	<p>Reporte desde: {{$fecha_inicio}} hasta {{$fecha_fin}}</p>

    <!-- Tabla con bordes para los datos del personal médico -->
    <table class="data-table">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Doctor</th>
                <th>Especialidad</th>
                <th>Fecha de reserva</th>
                <th>Hora de reserva</th>
            </tr>
        </thead>
        <tbody>
            <?php $contador = 1; ?>

            @foreach ($eventos as $evento)
                <tr>
                    <td>{{ $contador++ }}</td>
                    <td>{{ $evento->doctor->nombres." ".$evento->doctor->apellidos}}</td>
                    <td>{{ $evento->doctor->especialidad }}</td>
                    <td> {{ \Carbon\Carbon::parse($evento->start)->format('Y-m-d') }}</td>
                    <td> {{ \Carbon\Carbon::parse($evento->start)->format('H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
