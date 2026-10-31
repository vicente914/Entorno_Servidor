<?php

namespace Models;

class Alumno{
    
    //Constructor
    public function __construct(
        public string $nombre,
        public string $apellidos,
        public int $nota,
        public int $fechaNacimiento
    ){}



    //Métodos
    public function getNombreCompleto(): string{
        return $this->nombre . " " . $this->apellidos;
    }

    public function getEdad(): int{
        $anoActual = (int) date('Y');
        $edad = $anoActual - $this->fechaNacimiento;
        return $edad;
    }


}