<?php
    require_once __DIR__ . ("/EnvioEstandar.php");

    class EnvioExpress extends EnvioBase{

        //constructor
        public function __construct(float $peso, int $distancia){
            $this->peso = $peso;
            $this->distancia = $distancia;
        }

        //metodos
        public function calcularCosto(){
            $envioEstandar = new EnvioEstandar($this->peso, $this->distancia);
            $tarifaEstandar = $envioEstandar->calcularCosto();
            $cargo_urgencia = 10.0;
            return $tarifaEstandar + $cargo_urgencia;
        }

    }

?>