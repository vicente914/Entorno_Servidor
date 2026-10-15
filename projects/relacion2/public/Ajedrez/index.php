<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajedrez</title>
    <link rel="stylesheet" href="styles/style.css"> 
</head>
<body>
    
    
    <?php
    include "funciones.php";
   
    $equipoBlanco = [
        0 => "img/torreb.png",
        1 => "img/caballob.png",
        2 => "img/alfilb.png",
        3 => "img/reinab.png",
        4 => "img/reyb.png",
        5 => "img/alfilb.png",
        6 => "img/caballob.png",
        7 => "img/torreb.png"
    ];

$equipoNegro = [
        0 => "img/torren.png",
        1 => "img/caballon.png",
        2 => "img/alfiln.png",
        3 => "img/reinan.png",
        4 => "img/reyn.png",
        5 => "img/alfiln.png",
        6 => "img/caballon.png",
        7 => "img/torren.png"
    ];

$peonBlanco = "img/peon-blanco.png";
$peonNegro = "img/peon-negro.png";

    dibujarTabla($peonBlanco, $peonNegro, $equipoBlanco, $equipoNegro);

    ?>
</body>
</html>