<?php

namespace Controllers;

use Lib\Pages;
use Models\Persona;
use Requests\PersonaRequest;

class PersonaController{
    //propiedades
    public Pages $pagina;
    public Persona $persona;

    //constructor
    public function __construct(){
        $this->pagina = new Pages();
    }

    //Muestra el formulario inicial por primera vez
    public function formulario(){
        $this->pagina->render('persona/formulario', [
            'persona' => new Persona(),
            'errores' => []
            ]);
    }

    //Procesa el formulario (POST) sin usar sesiones ni redirecciones
    public function procesar(): void{
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            $this->formulario();
            return;
        }

        $entrada = $_POST['persona'] ?? [];
        $request = new PersonaRequest(is_array($entrada) ? $entrada : []);
    

        //Si los datos no son validados, renderizamos directamente el formulario con los datos recibidos
        //y los errores
        if(!$request->esValido()){
            $this->pagina->render('persona/formulario', [
                'persona' => Persona::fromArray($request->datos()),
                'errores' => $request->errores() 
            ]);
            return;
        }

        $persona = Persona::fromArray($request->datos());
        $this->pagina->render('persona/respuestaForm', ['persona' => $persona]);

    }



    
}