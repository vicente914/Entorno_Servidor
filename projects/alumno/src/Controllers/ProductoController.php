<?php

namespace Controllers;

use Lib\Pages;
use Models\Producto;
use Models\ProductoRepositorio;


class ProductoController{
    private Pages $pagina;

    public function __construct(){
        $this->pagina = new Pages();
    }


    //metodos
    public function index(): void{
        $repositorio = new ProductoRepositorio();
        
        //array de productos
        $productos = $repositorio->obtenerProductos();
        
        //Total de productos
        $totalP = count($productos);

        //Valor total del inventario
        $valorInventario = 0;
        foreach($productos as $producto){
            $valorInventario += ($producto->getPrecio() * $producto->getStock());
        }

        $this->pagina->render('productos/listado', [
            'productos' => $productos,
            'totalProductos' => $totalP,
            'valorInventario' => $valorInventario
        ]);
    }

}