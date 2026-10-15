<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siete y Media</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    
</body>
</html>

<?php
    require_once __DIR__ . "/funciones.php";
    
    $puntosJugador = 0;
    $puntosBanca = 0;
    $baraja = crearBaraja();
    barajarBaraja($baraja);

    while($puntosJugador < 7){
        echo "<h2>Turno del jugador</h2>";
        robarCarta($baraja, $puntosJugador);
        $turno = false;
    }

    while($puntosBanca < 7.5){
        echo "<h2>Turno de la banca</h2>";
        robarCarta($baraja, $puntosBanca);
    }

    if($puntosBanca > $puntosJugador){
        echo "<h2>JUGADOR GANA</h2>";
    }
    elseif ($puntosJugador > $puntosBanca){
        echo "<h2>BANCA GANA</h2></h2>";   
    }
    else{
        echo "<h2>EMPATE</h2>";
    }
    

?>