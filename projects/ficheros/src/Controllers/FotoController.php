<?php
declare(strict_types=1);

namespace Controllers;

use Lib\Pages;
use Models\Foto;
use Requests\FotoRequest;

/**
 * Controlador de las fotos: recibe lo que pide el usuario,
 * usa el Request y el Modelo, y decide qué vista mostrar.
 */
class FotoController
{
    private Pages $pagina;

    public function __construct()
    {
        $this->pagina = new Pages();
    }

    // Acción por defecto: formulario + listado de imágenes ya subidas
    public function formulario(): void
    {
        $this->mostrar();
    }

    // Acción a la que apunta el formulario (POST)
    public function procesar(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->formulario();
            return;
        }

        // El archivo NO está en $_POST, está en $_FILES
        $request = new FotoRequest($_FILES['foto'] ?? []);

        if (!$request->esValido()) {
            $this->mostrar($request->errores());
            return;
        }

        $foto = Foto::guardar($request->rutaTemporal(), $request->extension());

        if ($foto === null) {
            $this->mostrar(['foto' => 'Error interno al guardar el archivo en el servidor.']);
            return;
        }

        $this->mostrar([], 'Archivo subido correctamente: ' . $foto->getNombre());
    }

    // Método privado: FrontController no puede invocarlo desde la URL
    private function mostrar(array $errores = [], ?string $exito = null): void
    {
        $this->pagina->render('foto/formulario', [
            'fotos'   => Foto::listar(),   // lee la carpeta images/ cada vez
            'errores' => $errores,
            'exito'   => $exito,
        ]);
    }
}
