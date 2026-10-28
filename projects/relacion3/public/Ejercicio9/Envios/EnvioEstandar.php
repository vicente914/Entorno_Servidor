<?php
    require_once __DIR__ . ("/EnvioBase.php");

    class EnvioEstandar extends EnvioBase{

        //constructor
        public function __construct(float $peso, int $distancia){
            $this->peso = $peso;
            $this->distancia = $distancia;
        }

        //metodos
        public function calcularCosto(){
            $costo_base = 5.0;
            $costo_por_peso = $this->peso * 1.5;
            $costo_por_distancia = $this->distancia * 0.05;
            return $costo_base + $costo_por_peso + $costo_por_distancia;
        }


    }
?>