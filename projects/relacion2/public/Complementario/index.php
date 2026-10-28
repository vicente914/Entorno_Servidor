<?php
    echo "<h1>Complementario</h1>";

    $array = [];
    $complementario = [];
    for($i = 0; $i < 10; $i++){
        $array[] = random_int(0,1);
    }

    for($i = 0; $i < 10; $i++){
        ($array[$i] == 1)? $complementario[$i] = 0: $complementario[$i] = 1;
    }

    echo "Array normal: ";
    for($i = 0; $i < 10; $i++){
        echo $array[$i]." ";
    }

    echo "<br>Array complementario: ";
    for($i = 0; $i < 10; $i++){
        echo $complementario[$i]." ";
    }
?>