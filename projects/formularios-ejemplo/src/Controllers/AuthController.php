<?php
declare(strict_types=1);

namespace Controllers;
use Lib\Pages;

class AuthController{
    private Pages $pagina;

    public function __construct(){
        $this->pagina = new Pages();
    }

    public function mostrarFormularioUser(){
        $this->pagina->render('Usuario/formulariolog');
    }

    public function procesarUser(): void{
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            $this->mostrarFormularioUser();
            return;
        }

        $usuarioValido = [
            'nombre' => 'Usuario',
            'clave' => password_hash('1234', PASSWORD_BCRYPT)
        ];

        $comprobacionNombre = ($usuarioValido['nombre'] === $_POST['Usuario']['nombre']);
        $comprobacionClave = (password_verify($_POST['Usuario']['password'], $usuarioValido['clave']) === true);

        if($comprobacionNombre && $comprobacionClave){
            header('Location');
        }
        
        die(var_dump($usuarioValido));


        //Meter asi los datos es peligrosisimo

    }


}