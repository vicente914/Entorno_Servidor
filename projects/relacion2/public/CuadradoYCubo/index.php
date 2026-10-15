<?php
    echo "<h1>Cuadrado y Cubo</h1>";
    $numeros = [];

    while(count($numeros) < 20){
        $numeros[] = random_int(1, 100);
    }

    $cuadrados = [];
    for($i = 0; $i < count($numeros); $i++){
        $cuadrados[$i] = $numeros[$i]**2;
    }

    $cubo = [];
    for($i = 0; $i < count($numeros); $i++){
        $cubo[$i] = $numeros[$i]**3;
    }
    
    
    for($i = 0; $i < count($numeros); $i++){
        echo $numeros[$i] ."   |   ".$cuadrados[$i]."   |   ".$cubo[$i]."<br>";
    }
    
?>