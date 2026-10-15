<?php
    echo "<h1>Operaciones aritméticas</h1>";
    define("N", 10);
    $array1 = [];
    $array2 = [];
    $array3 = [];

    for($i = 0; $i < N; $i++){
        $array1[] = $i;
    }

    for($i = N; $i > 0; $i--){
        $array2[] = $i;
    }

    for($i = 0; $i < N; $i++){
        $array3[] = $array1[$i] + $array2[$i];
    }
    echo "<h2>Array 1</h2>";
    for($i = 0; $i < N; $i++){
        echo $array1[$i]."<br>";
    }

    echo "<h2>Array 2</h2>";
    for($i = 0; $i < N; $i++){
        echo $array2[$i]."<br>";
    }
    echo "<h2>Array 3</h2>";
    for($i = 0; $i < N; $i++){
        echo $array3[$i]."<br>";
    }
?>