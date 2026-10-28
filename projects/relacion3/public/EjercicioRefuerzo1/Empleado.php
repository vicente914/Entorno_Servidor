<?php
    class Empleado{

        //constructor con promocion de propiedades
        public function __construct(
            public string $nombre,
            public float $salario,
            public string $departamento
            ){}

        //métodos 
        public function getSalarioAnual(): string|float{
            return "Salario anual: " . $this->salario*12 ."<br>";
        }
    }
?>