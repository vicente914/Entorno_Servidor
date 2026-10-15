<?php

function dibujarTabla($peonBlanco, $peonNegro, $equipoBlanco, $equipoNegro){
    echo "<table>";
        for($i = 0; $i < 8; $i++){
            echo "<tr>";
                for($j = 0; $j < 8; $j++){
                   if(($i + $j) % 2 == 0){
                        echo "<td class='blanca'>";
                   }
                   else{
                        echo "<td class='gris'>";
                   }
                   dibujarPieza($i, $j, $peonBlanco, $peonNegro, $equipoBlanco, $equipoNegro);
                   echo "</td>";
                }

            echo "</tr>";
        }
    echo "</table>";
}

function dibujarPieza($fila, $columna, $peonBlanco, $peonNegro, $equipoBlanco, $equipoNegro){
    if($fila == 0){
        echo "<img src='$equipoNegro[$columna]'>";
    }
    else if($fila == 1){
        echo "<img src='$peonNegro'>";
    }
    else if($fila == 6){
        echo "<img src='$peonBlanco'";
    }
    else if($fila == 7){
        echo "<img src='$equipoBlanco[$columna]'";
    }
}




?>