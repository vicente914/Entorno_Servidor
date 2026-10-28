<?php
    echo "<h1>Relleno automático</h1>";
    $numeros = [];
    while(count($numeros) < 120){
        $numeros[] = random_int(1, 10); 
    }

    for($i = 0; $i < count($numeros); $i++){
        echo $numeros[$i]. " ";
    }

?>