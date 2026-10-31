<?php

namespace Models;


class ProductoRepositorio{
    
    /**Metodo que crea un array asociativo de productos */
    public function obtenerProductos(): array{
        $datosProductos = [
            ['id' => 1, "nombre" => 'raton', 'precio' => 14.99, 'stock' => 50],
            ['id' => 2, "nombre" => 'teclado', 'precio' => 29.99, 'stock' => 30],
            ['id' => 3, "nombre" => 'pantalla', 'precio' => 99.99, 'stock' => 15],
            ['id' => 4, "nombre" => 'usb2TB', 'precio' => 49.99, 'stock' => 150],
            ['id' => 5, "nombre" => 'cascos', 'precio' => 19.99, 'stock' => 30],
            ['id' => 6, "nombre" => 'cargador', 'precio' => 9.99, 'stock' => 25]
        ];


        $productos = [];
        foreach($datosProductos as $datos){
            $productos[] = new Producto(
                $datos['id'],
                $datos['nombre'],
                $datos['precio'],
                $datos['stock']
            );
        }

        return $productos;

    }
}