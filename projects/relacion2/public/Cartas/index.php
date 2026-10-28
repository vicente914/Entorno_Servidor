<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
    <link rel=stylesheet href="./styles/style.css">
</head>
<body>
    
</body>
</html>


<?php
    include "funciones.php";

    $baraja = crearBaraja();

    barajarBaraja($baraja);
    //var_dump($baraja);

    
    mostrarBaraja($baraja);
    //var_dump(crearBarajaCompleta());
?>