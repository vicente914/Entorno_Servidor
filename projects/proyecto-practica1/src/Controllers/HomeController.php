<?php
namespace Controllers;

use Lib\Pages;
class HomeController{
    public Pages $pagina;


    public function __construct(){
        $this->pagina = new Pages();
    }

    public function index(){
        $this->pagina->render('home/index');
    }
}