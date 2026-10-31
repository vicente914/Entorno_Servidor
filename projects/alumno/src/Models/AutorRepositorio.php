<?php

namespace Models;

class AutorRepositorio{

    /**Metodo que devuelve la array de autores con todas sus propiedades */

    private function listaAutores(){
        return [
            ['id' => 1, 'nombre' => 'Pablo', 'nacionalidad' => 'payo'],
            ['id' => 2, 'nombre' => 'Dylan', 'nacionalidad' => 'argentino'],
            ['id' => 3, 'nombre' => 'Vicente', 'nacionalidad' => 'espaniol']
        ];

    }


    public function obtenerTodos(){
        $autores = [];

        foreach($this->listaAutores() as $dato){
            $autores[] = new Autor(
                $dato['id'],
                $dato['nombre'],
                $dato['nacionalidad']
            );
        }

        return $autores;   
    }


    public function obtenerPorId(int $id): ?autor{
        $autor = null;
        
        foreach($this->listaAutores() as $dato){
            if($dato['id'] === $id){
                $autor = new Autor($dato['id'], $dato['nombre'], $dato['nacionalidad']);
            }
        }

        return $autor;
    }
    
}