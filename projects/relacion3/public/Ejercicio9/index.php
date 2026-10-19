<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactorizando</title>
</head>
<body>
    
</body>
</html>


<?php
    require_once __DIR__ . ("/Envios/EnvioEstandar.php");
    require_once __DIR__ . ("/Envios/EnvioExpress.php");
    require_once __DIR__ . ("/Envios/EnvioInternacional.php");
    
    $envioEstandar = new EnvioEstandar(5.0, 20);
    $envioExpress = new EnvioExpress(5.0, 20);
    $envioInternacional = new EnvioInternacional(5.0, 500);
    echo "<h2>Envio Estandar</h2>";
    echo $envioEstandar->calcularCosto() . "<br>";

    echo "<h2>Envio express</h2>";
    echo $envioExpress->calcularCosto() . "<br>";

    echo "<h2>Envio internacional</h2>";
    echo $envioInternacional->calcularCosto();

?>