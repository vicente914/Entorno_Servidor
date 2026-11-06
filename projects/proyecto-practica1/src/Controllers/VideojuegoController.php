<?php
namespace Controllers;

use Lib\Pages;
use Models\Videojuego;

class VideojuegoController{
    //parametros
    public Pages $pagina;

    public function __construct(){
        $this->pagina = new Pages();
    }

    public function mostrarFormulario(): void{
        $this->pagina->render('videojuego/formulario');
    }

    
    public function procesar(): void{
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            $this->mostrarFormulario();
            return;
        }

        $entrada = $_POST['Videojuego'] ?? [];
        $request = new VideojuegoRequest
    }

}