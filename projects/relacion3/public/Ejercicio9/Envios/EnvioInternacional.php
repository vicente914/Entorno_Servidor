<?php
    require_once __DIR__ .("/EnvioBase.php");

    class EnvioInternacional extends EnvioBase{

        //constructor
        public function __construct(float $peso, int $distancia){
            $this->peso = $peso;
            $this->distancia = $distancia;
        }

        //metodos
        public function calcular_tarifa(){
            $costo_base = 20.0;
            $costo_por_peso = $this->peso * 5.0;
            $costo_por_distancia = ($this->distancia > 500)? $this->distancia*0.1 : 0.0;
            return $costo_base + $costo_por_peso + $costo_por_distancia;
        }
    }
?>