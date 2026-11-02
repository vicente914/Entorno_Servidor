<?php

namespace Controllers;

use Lib\Pages;

class AlumnoController{
    //propiedades
    public Pages $pagina;

    //constructor
    public function __construct(){
        $this->pagina = new Pages();
    }

    public function bienvenida(): void{
        $this->pagina->render('Layout/header');
    }
    
    public function procesar(): void{
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $datos = $_POST;

            $datos['contrasena'] = password_hash($datos['contrasena'], PASSWORD_BCRYPT);

            $this->pagina->render('alumno/respuestaForm', ['datos' => $datos]);

            return;
        }


        $this->pagina->render('alumno/formulario');
    }
}