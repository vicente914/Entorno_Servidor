<?php
    require_once __DIR__ . ("/FiguraGeometrica.php");

    class Rectangulo extends FiguraGeometrica{

        //constructor
        public function __construct(string $nombre, public float $ancho, public float $alto){
            parent::__construct($nombre);
        }


        //metodos heredados
        public function calcularArea(): string|float{
            return "Área del rectangulo: ".$this->ancho*$this->alto;
        }
    }

?>