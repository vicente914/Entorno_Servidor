<?php
    abstract class FiguraGeometrica{

        //constructor
        public function __construct(protected string $nombre){}


        //metodos

        abstract public function calcularArea(): string|float;

        public function mostrarNombre(){
            return "Nombre de la figura: ". $this->nombre;
        }
    }

?>