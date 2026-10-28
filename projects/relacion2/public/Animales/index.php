<?php
    echo "<h1>Animales</h1>";
    $animales = [];
    $random = random_int(20, 30);

    function generarAnimales($array){
        for($i = 0; $i < count($array); $i++){
            $array[$i] = mb_chr(random_int(128000, 128060), 'UTF-8');
        }
        return $array;
    }

    $animales = array_fill(0, $random, '');
    $animales = generarAnimales($animales);
    echo $random . " animales<br>";
    echo implode('      ', $animales);

    echo "<br><br>Animal a eliminar";
    $descartado = $animales[array_rand($animales)];
    echo $descartado . "<br>";

    $restantes = array_diff($animales, [$descartado]);
    echo "<br>Quedan ".count($restantes) . " animales<br>";
    echo implode('      ', $restantes);

    

    
  
?>