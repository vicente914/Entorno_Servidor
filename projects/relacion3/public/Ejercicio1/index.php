<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios con objetos</title>
</head>
<body>
    
</body>
</html>

<?php
    require_once __DIR__ . ("/Coche.php");
    
    $coche1 = new Coche();
    echo "<h2>Datos del coche</h2>";
    $coche1->__toString();

    echo "<h2>Cambiamos el color del coche y lo ponemos amarillo</h2>";
    $coche1->setColor("Amarillo");
    echo "El nuevo color de mi coche es: ".$coche1->getColor();

    echo "<h2>Mi coche va a acelerar 4 veces y frenar una vez</h2>";
    for($i = 0; $i < 4; $i++){
        $coche1->acelerar();
    }
    $coche1->frenar();
    echo "Esta es ahora la velocidad del coche: ".$coche1->getVelocidad();

    echo "<h2>Creamos un nuevo coche su color será VERDE y el modelo GALLARDO</h2>";
    $coche2 = new Coche(color: "Verde", modelo: "Gallardo");

    echo "<h2>Datos del NUEVO coche</h2>";
    $coche2->__toString();
?>