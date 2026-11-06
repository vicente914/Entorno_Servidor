<?php
namespace Models;

class Videojuego{

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

    public function setNombre( string $nuevoNombre): void{
        $this->nombre = $nuevoNombre;
    }

    public function setGenero(string $nuevoGenero): void{
        $this->genero = $nuevoGenero;
    }

    public function setPrecio(float $nuevoPrecio): void{
        $this->precio = $nuevoPrecio;
    }


    
}