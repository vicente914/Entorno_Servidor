<?php

namespace Controllers;

use Lib\Pages;
use Models\Alumno;

class AlumnoController{
    //propiedades
    private Pages $pagina;

    public function __construct(){
        $this->pagina = new Pages();
    }

    //Creamos alumno con datos fijos y llamamos a la vista
    public function mostrarAlumno(){
        $alumno = new Alumno('Ana', 'Perez', 8, 2007);
        $this->pagina->render('alumno/muestraAlumno', [
            'alumno' => $alumno
        ]);
    }
}