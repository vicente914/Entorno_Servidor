<?php
declare(strict_types=1);

namespace Controllers;

use Lib\Pages;
use Models\Contacto;

class ContactoController{
    private Pages $pagina;
   
    public function __construct(){
        $this->pagina = new Pages();
    }

    /**Muestra el formulario */
    public function formulario(): void{
        $this->pagina->render('contacto/formulario');
    }

    /**Recoge datos y muestra el resultado */

    public function procesar(): void{
        //Si se entra por GET no hay datos: se muestra el formulario
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            $this->formulario();
            return;
        }

        //Recoger los datos
        //Recuerda que esto es peligroso y que tenemos que sanear y validar
        $contacto = Contacto::fromArray($_POST['contacto'] ?? []);

        //Mostrar el resultado (todavia no se valida ni se guarda nada)
        $this->pagina->render('contacto/resultado', ['contacto' => $contacto]);
    }
}