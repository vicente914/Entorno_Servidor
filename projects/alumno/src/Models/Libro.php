<?php

namespace Models;


class Libro{
    //constructor
    public function __construct(
        public int $id,
        public string $titulo,
        public int $anio,
        public int $autorId,
        public bool $disponible
    ){}


    //GETTERS
    public function getId(): int{
        return $this->id;
    }

    public function getTitulo(): string{
        return $this->titulo;
    }

    public function getAnio(): int{
        return $this->anio;
    }

    public function getAutorId(): int{
        return $this->autorId;
    }

    public function getDisponible(): bool{
        return $this->disponible;
    }
}