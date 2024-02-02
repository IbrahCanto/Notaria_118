<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Notaría 118</title>
</head>
<body>
<p><b>{{ $datosFormulario['Nombre'] }}</b> se puso en contacto con los siguientes datos:</p>

<p>Nombre: {{ $datosFormulario['Nombre'] }}</p>
<p>Email: {{ $datosFormulario['Email'] }}</p>
<p>Telefono: {{ $datosFormulario['Telefono'] }}</p>
<p>Mensaje: {{ $datosFormulario['Mensaje'] }}</p>
<p>Informacion requerida: {{ $datosFormulario['Tipo_de_Informacion'] }}</p>

</body>
</html>