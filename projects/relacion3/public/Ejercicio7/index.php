<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras geometricas</title>
</head>
<body>
    
</body>
</html>

<?php

    require_once __DIR__ .("/Circulo.php");
    require_once __DIR__ .("/Rectangulo.php");

    $circ1 = new Circulo('circulo', 7);
    $rect1 = new Rectangulo('rectangulo', 10, 50);

    echo $circ1->calcularArea() . "<br>";
    echo $rect1->calcularArea();

?>