<?php
    function crearBaraja(){
        $palos = ["oros", "copas", "espadas", "bastos"]; 
        $baraja = [];
        for($i = 0; $i < count($palos); $i++){
            for($j = 1; $j <= 10; $j++){
                if($j > 7){
                    $baraja[] = ["numero" => $j+2, "palo" => $palos[$i]];
                }
                else{
                    $baraja[] = ["numero" => $j, "palo" => $palos[$i]];
                }
            }
        }

        return $baraja;
    }

    function crearBarajaCompleta(){
        $palos = ["oros", "copas", "espadas", "bastos"]; 
        $baraja = [];
        for($i = 0; $i < count($palos); $i++){
            for($j = 1; $j <= 12; $j++){
                $baraja[] = ["numero" => $j, "palo" => $palos[$i]];
            }
        }

        return $baraja;
    }
    

    function barajarBaraja(array &$baraja): void{
        shuffle($baraja);
    }

    function sacarCarta(array &$baraja):array{
        return array_pop($baraja);
    }

    function mostrarCarta(array $carta){
        return "<img src='./img/$carta[palo]_$carta[numero].jpg'>";
    }

    function mostrarBaraja(array $baraja): void{
        foreach($baraja as $carta){
            echo mostrarCarta($carta);
        }
    }
?>