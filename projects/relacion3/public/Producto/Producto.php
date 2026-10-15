<?php
    class Producto{
        private string $nombre;
        private float $precio;


        //functions
        public function getNombre(): string{
            return $this -> nombre;
        }

        public function getPrecio(): float{
            return $this -> precio;
        }

        public function setNombre($nombre):void{
            $nombre = $this -> nombre;
        }

        public function setPrecio($precio):void{
            $precio = $this -> precio;
        }

    }
?>