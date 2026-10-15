<?php
    function mostrarArray($array){
        for($i = 0; $i < count($array); $i++){
            echo $array[$i];
        }
    }
    echo "<h1>Operaciones básicas</h1>";
    $numeros = [3,2,1,4,5,6,7,8];

    echo "Recorremos un array de enteros: ";
    mostrarArray($numeros);

    echo "<br>Lo ordenamos de menor a mayor y lo mostramos: ";
    sort($numeros);
    mostrarArray($numeros);

    echo"<br>Mostramos su cantidad de elementos: ". count($numeros)."<br>";

    echo"Buscamos un elemento concreto de forma estatica: ";
    echo (in_array(2, $numeros))?"Existe dentro del array":"No existe dentro del array";

    echo"<br>Buscamos un elemento en concreto de forma dinámica: ";
    $elemento = $_GET['elemento'];
    echo (in_array($elemento, $numeros))?"Existe dentro del array":"No existe dentro del array";



?>