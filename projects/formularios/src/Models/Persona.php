<?php

namespace Models;

class Persona{
    //constructor
    public function __construct(
        public string $nombre = '',
        public string $apellidos = '',
        public string $correo = '',
        public string $telefono = '',
        public string $situacionLaboral = '',
        public array $lenguajes = [],
        public string $url = ''
    ){}

    //metodos

    public static function fromArray(array $datos): self{
        return new self(
            nombre: trim($datos['nombre']),
            apellidos: trim($datos['contrasena'] ?? ''),
            correo: trim($datos['correo'] ?? ''),
            telefono: trim($datos['telefono'] ?? ''),
            situacionLaboral: $datos['situacionLaboral'] ?? [],
            lenguajes: $datos['lenguajes'] ?? [],
            url: trim($datos['url'] ?? '')
        );
    }

}