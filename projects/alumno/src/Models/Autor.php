<?php

namespace Models;

class Autor{
    //constructor
    public function __construct(
        public int $id,
        public string $nombre,
        public string $nacionalidad
    ){}

    //GETTERS
    public function getId(): int{
        return $this->id;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getNacionalidad(): string{
        return $this->nacionalidad;
    }
}