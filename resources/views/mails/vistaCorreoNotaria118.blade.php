<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Notaría Publica 118</title>
</head>
<body>
<p><b>{{ $datosFormulario['Nombre'] }}</b> se puso en contacto con los siguientes datos:</p>

<p>Nombre: {{ $datosFormulario['Nombre'] }}</p>
<p>Email: {{ $datosFormulario['Email'] }}</p>
<p>Telefono: {{ $datosFormulario['Telefono'] }}</p>
<p>Mensaje: {{ $datosFormulario['Mensaje'] }}</p>
<!-- <p>Informacion requerida: {{ $datosFormulario['Tipo_de_Informacion'] }}</p> -->

@if ($datosFormulario['Tipo_de_Informacion'] === 'Cita_para_Asesoría_Legal')
    <p>Informacion requerida: Cita para Asesoría Legal</p>
@elseif ($datosFormulario['Tipo_de_Informacion'] === 'Información_de_Servicios')
    <p>Informacion requerida: Información de Servicios</p>
@else
    <p>No se pudo determinar el tipo de información solicitada.</p>
@endif


</body>
</html>