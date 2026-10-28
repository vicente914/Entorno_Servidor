<?php
    class Coche{

        public function __construct(
            public string $color = "Rojo",
            public string $marca = "Ferrari",
            public string $modelo = "Aventador",
            public int $velocidad = 300,
            public int $caballos = 500,
            public int $plazas = 2
            ){}

        
        public function acelerar(): void{
            $this->velocidad += 1;
        }

        public function frenar(): void{
            $this->velocidad -= 1;
        }

        public function setColor(string $color): void{
            $this->color = $color;
        }

        public function getColor(): string{
            return $this->color;
        }

        public function getVelocidad(): int{
            return $this->velocidad;
        }

        public function __toString(): string{
            return printf(
                "<ul>
                    <li>Marca: {$this->marca}</li>
                    <li>Modelo: {$this->modelo}</li>
                    <li>Color: {$this->color}</li>
                    <li>Caballos: {$this->caballos}</li>
                    <li>Velocidad: {$this->velocidad}</li>
                    <li>Plazas: {$this->plazas}</li>
                </ul>"
            );
        }
    }

?>