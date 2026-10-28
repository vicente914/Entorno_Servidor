<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
</head>
<body>
    <h1>Datos recibidos:</h1>
    <p>Nombre: <?= htmlspecialchars($_POST['nombre']?? '', ENT_QUOTES, 'UTF-8') ?></p>
    <p>Apellidos: <?= htmlspecialchars($_POST['apellidos']?? '', ENT_QUOTES, 'UTF-8') ?></p>

    <p><b>El contenido de la variables $_POST es:</b></p>
    <pre><?php var_dump($_POST);?></pre>

    <h4>No olvide que $_REQUEST nos permite capturar variables enviadas desde formularios</h4>
    <p>Nombre (  $_REQUEST ): <?= htmlspecialchars( $_REQUEST['nombre'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
    <p>Nombre (  $_REQUEST ): <?= htmlspecialchars( $_REQUEST['apellido'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
</body>
</html>