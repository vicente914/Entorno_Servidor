<?php
    require_once __DIR__ . ("/CalculadorEnvio.php");
    abstract class EnvioBase implements CalculadorEnvio{
        //Propiedades

        public float $peso;
        public int $distancia;

        abstract public function calcularCosto();
    }
?>