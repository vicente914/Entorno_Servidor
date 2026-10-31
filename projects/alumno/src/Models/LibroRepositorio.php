<?php

namespace Models;

class LibroRepositorio{

    /**Método que devuelve array de Libros con todas sus propiedades */
    public function listaLibros(){
        $datosLibros = [
            ['id' => 1, "titulo" => 'Pensar rapido, pensar despacio', 'anio' => 2022, 'autorId' => 3, 'disponible' => true],
            ['id' => 2, "titulo" => 'Payo aventuras', 'anio' => 2025, 'autorId' => 1, 'disponible' => false],
            ['id' => 3, "titulo" => 'Payo aplasta', 'anio' => 2026, 'autorId' => 1, 'disponible' => true],
            ['id' => 4, "titulo" => 'Como entrenar correctamente', 'anio' => 2026, 'autorId' => 3, 'disponible' => false],
            ['id' => 5, "titulo" => '¡¿Colega?!', 'anio' => 2026, 'autorId' => 2, 'disponible' => false],
            ['id' => 6, "titulo" => 'Cheesy Michael', 'anio' => 2025, 'autorId' => 2, 'disponible' => true],
            ['id' => 7, "titulo" => 'Practica completa', 'anio' => 2025, 'autorId' => 3, 'disponible' => true],
            ['id' => 8, "titulo" => 'Payo payez al rescate', 'anio' => 2026, 'autorId' => 1, 'disponible' => true]
        ];

        $libros = [];


        foreach($datosLibros as $dato){
            $libtos[] = new Libro(
                $dato['id'],
                $dato['titulo'],
                $dato['anio'],
                $dato['autorId'],
                $dato['disponible']

            );
        }

        return $libros;
    }
}