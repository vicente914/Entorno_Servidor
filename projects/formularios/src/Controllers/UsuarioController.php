<?php

namespace Controllers;

use Lib\Pages;
use Models\Usuario;
use Requests\UsuarioRequest;

class UsuarioController{
    //propiedades
    public Pages $pagina;
    public Usuario $usuario;

    //constructor
    public function __construct(){
        $this->pagina = new Pages();
    }

    //Muestra el formulario inicial por primera vez
    public function formulario(){
        $this->pagina->render('sesion/formulario', [
            'usuario' => new Usuario(),
            'errores' => []
            ]);
    }

    //Procesa el formulario (POST) sin usar sesiones ni redirecciones
    public function procesar(): void{
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            $this->formulario();
            return;
        }

        $entrada = $_POST['usuario'] ?? [];
        $request = new UsuarioRequest(is_array($entrada) ? $entrada : []);
    

        //Si los datos no son validados, renderizamos directamente el formulario con los datos recibidos
        //y los errores
        if(!$request->esValido()){
            $this->pagina->render('sesion/formulario', [
                'usuario' => Usuario::fromArray($request->datos()),
                'errores' => $request->errores() 
            ]);
            return;
        }

        $usuario = Usuario::fromArray($request->datos());
        $this->pagina->render('sesion/respuestaForm', ['usuario' => $usuario]);

    }



    
}