<?php

use Lib\Pages;
use Models\Autor;
use Models\AutorRepositorio;
use Models\Libro;
use Models\LibroRepositorio;

class BibliotecaController{
    private Pages $pagina;
    private AutorRepositorio $autoresRepo;
    private LibroRepositorio $librosRepo;

    public function __construct(){
        $this->pagina = new Pages();
        $this->autoresRepo = new AutorRepositorio();
        $this->librosRepo = new LibroRepositorio();
    }

    //Bienvenida
    public function bienvenida(): void{
        $this->pagina->render('biblioteca/inicio');
    }

    //Lista de libros con y su autor
    public function librosConAutor(): void{
        $libros = $this->librosRepo->obtenerTodos();
        $datos =[];
        
        foreach($libros as $libro){
            $autor = $this->autoresRepo->obtenerPorId($libro->getAutorId());
            $datos[] = ['libro' => $libro, 'autor'=>$autor];
        }

        $this->pagina->render('biblioteca/libros', ['datos' => $datos]);
    }

    //Detalles del libro

    public function libro(): void{
        $id = (int)($_GET['id'] ?? 0);
        $libro = $this->librosRepo->obtenerPorId($id);

        if(!$libro){
            $this->pagina->render('error/libroAutorNoExiste');
        }

        $autor = $this->autoresRepo->obtenerPorId($libro->getAutorId());
        $this->pagina->render('biblioteca/detallesLibro', ['libro' => $libro, 'autor'=>$autor]);
    }


    //Ficha de autor con todos sus libros
    public function autor(): void{
        $id = (int)($_GET['id'] ?? 0);
        $autor = $this->autoresRepo->obtenerPorId($id);

        if(!$autor){
            $this->pagina->render('error/libroAutorNoExiste');
        }

        $libros = $this->librosRepo->obtenerPorIdAutor($id);
        $this->pagina->render('biblioteca/detalleAutor', ['autor' => $autor, 'libros'=> $libros]);
    }


    //Mostrar solo los libros disponibles
    public function disponibles(): void{
        $libros = $this->librosRepo->obtenerDisponibles();

        $datos = [];
        foreach($libros as $libro){
            $autor = $this->autoresRepo->obtenerPorId($libro->getAutorId());
            $datos[] = ['libro' => $libro, 'autor' => $autor];
        }

        $this->pagina->render('biblioteca/disponibles', ['datos' => $datos]);
    }

}