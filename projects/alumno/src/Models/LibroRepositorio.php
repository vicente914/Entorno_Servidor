<?php

namespace Models;

class LibroRepositorio{

    /**Método que devuelve array de array asociativos con los datos de cada libro*/
    private function datosLibros(): array{
        return [
            ['id' => 1, "titulo" => 'Pensar rapido, pensar despacio', 'anio' => 2022, 'autorId' => 3, 'disponible' => true],
            ['id' => 2, "titulo" => 'Payo aventuras', 'anio' => 2025, 'autorId' => 1, 'disponible' => false],
            ['id' => 3, "titulo" => 'Payo aplasta', 'anio' => 2026, 'autorId' => 1, 'disponible' => true],
            ['id' => 4, "titulo" => 'Como entrenar correctamente', 'anio' => 2026, 'autorId' => 3, 'disponible' => false],
            ['id' => 5, "titulo" => '¡¿Colega?!', 'anio' => 2026, 'autorId' => 2, 'disponible' => false],
            ['id' => 6, "titulo" => 'Cheesy Michael', 'anio' => 2025, 'autorId' => 2, 'disponible' => true],
            ['id' => 7, "titulo" => 'Practica completa', 'anio' => 2025, 'autorId' => 3, 'disponible' => true],
            ['id' => 8, "titulo" => 'Payo payez al rescate', 'anio' => 2026, 'autorId' => 1, 'disponible' => true]
        ];

    }

    public function obtenerTodos(): array{
        $libros = [];

        foreach($this->datosLibros() as $dato){
            $libros[] = new Libro(
                $dato['id'],
                $dato['titulo'],
                $dato['anio'],
                $dato['autorId'],
                $dato['disponible']

            );
        }

        return $libros;
    }

    public function obtenerPorId( int $id): ?Libro{
        $libro = null;
        foreach($this->datosLibros() as $dato){
            if($dato['id'] === $id){
                $libro = new Libro(
                    $dato['id'], 
                    $dato['titulo'], 
                    $dato['anio'],
                    $dato['autorId'], 
                    $dato['disponible']
                );
            }
        }

        return $libro;
    }


    public function obtenerDisponibles(): array{
        $libros = [];

        foreach($this->datosLibros() as $dato){
            if($dato['disponible'] === true){
                $libros[] = new Libro(
                    $dato['id'], 
                    $dato['titulo'], 
                    $dato['anio'],
                    $dato['autorId'], 
                    $dato['disponible']
                );
            }
        }

        return $libros;
    }


    public function obtenerPorIdAutor(int $idAutor): array{
        $libros = [];
        foreach($this->datosLibros() as $dato){
            if($dato['autorId'] === $idAutor){
                $libros[] = new Libro(
                    $dato['id'], 
                    $dato['titulo'], 
                    $dato['anio'],
                    $dato['autorId'], 
                    $dato['disponible']
                );
            }
        }

        return $libros;
    }




}