<?php

    function crearBaraja(){
        $palos = ["oros", "copas", "espadas", "bastos"];
        $baraja = [];
        for($i = 0; $i < count($palos); $i++){
            for($j = 1; $j < 11; $j++){
                if($j > 7){
                    $baraja[] = ["palo"=>$palos[$i], "numero"=>$j+2, "valor"=>0.5];
                }
                else{
                    $baraja[] = ["palo" => $palos[$i], "numero"=>$j,"valor"=>$j];
                }
            }
        }
        return $baraja;
    }


    function barajarBaraja(array &$baraja): void{
        shuffle($baraja);
    }

    function robarCarta(&$baraja, &$puntos): void{
        $carta = array_pop($baraja);
        $puntos += $carta["valor"];
        var_dump($carta);
        echo 'Puntos actuales :'.$puntos;
        
    }


?>