<?php
    require_once __DIR__ . ("/FiguraGeometrica.php");
    class Circulo extends FiguraGeometrica{

        //constructor
        public function __construct(string $nombre,public float $radio){
            parent::__construct($nombre);
        }

        //metodos heredados
        public function calcularArea(): string|float{
            $pi = pi();
            $area = $pi * $this->radio**2;
            return "Area de ". $this->nombre. ": ".$area;
        }
    }

?>