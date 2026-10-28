<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

    require_once __DIR__ . ("/Producto.php");

    $prod1 = new Producto();
    $prod2 = new Producto();
    $prod3 = new Producto();

    echo Producto::obtenerCantidadObjetos();//como llamar a un método estatico de una clase

?>