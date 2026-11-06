<?php
declare(strict_types=1);
namespace Controllers;

use Lib\Pages;
Use Models\Articulo;

class ArticuloController{
    private Pages $pagina;

    public function __construct()
    {
        $this->pagina = new Pages();
    }

    // Acción por defecto: solo el formulario de búsqueda (200 OK)
    public function formulario(): void
    {
        $this->pagina->render('articulo/formulario');
    }

    // Acción a la que apunta el formulario
    public function buscar(): void
    {
        $entrada = $_GET['id'] ?? '';

        // Si llega algo que no es texto (p. ej. ?id[]=1) no es un id válido
        if (!is_string($entrada)) {
            $this->error400('El identificador no tiene un formato válido.');
            return;
        }

        // Saneamos: quitamos espacios sobrantes
        $entrada = trim($entrada);

        // 1. Validar que se ha introducido algo
        if ($entrada === '') {
            $this->error400('Debes introducir el identificador de un artículo.');
            return;
        }

        // 2. Validar el formato: entero positivo
        $id = filter_var($entrada, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
        if ($id === false) {
            $this->error400('El identificador no es válido: solo se admiten números enteros positivos.', $entrada);
            return;
        }

        // 3. Pedimos el artículo al modelo
        $articulo = Articulo::buscarPorId($id);

        if ($articulo === null) {
            // La cabecera HTTP se envía ANTES de cargar la vista
            http_response_code(404);
            $this->pagina->render('articulo/noEncontrado', ['id' => $id]);
            return;
        }

        // 200 OK (es el código por defecto, lo dejamos explícito)
        http_response_code(200);
        $this->pagina->render('articulo/detalle', ['articulo' => $articulo]);
    }

    // Método privado: FrontController no puede invocarlo desde la URL
    private function error400(string $mensaje, string $valor = ''): void
    {
        http_response_code(400);
        $this->pagina->render('articulo/formulario', [
            'error' => $mensaje,
            'valor' => $valor,
        ]);
    }
}