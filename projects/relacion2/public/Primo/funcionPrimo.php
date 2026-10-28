<?php
    function esPrimo(int $num){
        $esPrimo = "ES PRIMO";
        
        if($num < 2){
            $esPrimo = "NO ES PRIMO";
        }
        else{
            for($i = 2; $i < $num; $i++){
                if($num % $i == 0){
                    $esPrimo = "NO ES PRIMO";
                }
            }
        }

        return "¿El número es primo?: ".$esPrimo;
    }
?>