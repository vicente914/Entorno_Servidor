<?php
    echo "<h1>Probando clases</h1>";

    require_once("Producto.php");
    $producto1 = new Producto;

    $producto1-> setNombre("Juguete");
    $producto1->getNombre();
?>