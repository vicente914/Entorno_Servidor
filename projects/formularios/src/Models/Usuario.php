<?php

namespace Models;

class Usuario{
    //constructor
    public function __construct(
        public string $nombre = '',
        public string $contrasena = ''
    ){}

    //metodos

    public static function fromArray(array $datos): self{
        return new self(
            nombre: trim($datos['nombre']),
            contrasena: $datos['contrasena']
        );
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getContrasena(){
        return $this->contrasena;
    }

}