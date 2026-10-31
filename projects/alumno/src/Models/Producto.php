<?php

namespace Models;

class Producto{

    //constructor
    public function __construct(
        public int $id,
        public string $nombre,
        public float $precio,
        public int $stock
    ){}

    /**Metodo que calcula el precio con IVA incluido */
    public function getPrecioConIva(float $iva = 0.21): float{
        $precioIva = $this->precio * $iva;
        return $this->precio + $precioIva;
    }


    /**GETTERS */
    public function getId(){
        return $this->id;
    }

     public function getNombre(){
        return $this->nombre;
    }

     public function getPrecio(){
        return $this->precio;
    }

     public function getStock(){
        return $this->stock;
    }
}