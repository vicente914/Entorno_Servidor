<?php

namespace Models;

class AutorRepositorio{

    /**Metodo que devuelve la array de autores con todas sus propiedades */

    public function listaAutores(){
        $datosAutores = [
            ['id' => 1, 'nombre' => 'Pablo', 'nacionalidad' => 'payo'],
            ['id' => 2, 'nombre' => 'Dylan', 'nacionalidad' => 'argentino'],
            ['id' => 3, 'nombre' => 'Vicente', 'nacionalidad' => 'espaniol']
        ];

        $autores = [];

        foreach($datosAutores as $dato){
            $autores[] = new Autor(
                $dato['id'],
                $dato['nombre'],
                $dato['nacionalidad']
            );
        }

        return $autores;
    }
}