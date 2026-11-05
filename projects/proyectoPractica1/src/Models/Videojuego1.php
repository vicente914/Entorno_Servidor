<?php
namespace Models;

class Videojuego1{

    //constructor
    public function __construct(
        public string $nombre = '',
        public string $genero = '',
        public float $precio = 0,
    ){}

    //GETTERS
    public function getNombre(): string{
        return $this->nombre;
    }

    public function getGenero(): string{
        return $this->genero;
    }

    public function getPrecio(): float{
        return $this->precio;
    }


    
}