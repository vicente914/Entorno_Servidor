<?php
declare(strict_types=1);

namespace Models;

/**
 * Modelo Foto: representa una imagen guardada en la carpeta images/.
 * Se encarga de todo lo que tiene que ver con los ficheros en disco:
 * guardar una imagen nueva y listar las que ya existen.
 */
final class Foto
{
    private const EXTENSIONES = ['jpg', 'png', 'gif'];

    public function __construct(private string $nombre) {}

    public function getNombre(): string
    {
        return $this->nombre;
    }

    // Ruta que usará el navegador en <img src="...">
    public function getUrl(): string
    {
        return IMAGES_URL . $this->nombre;
    }

    /**
     * Mueve el archivo temporal a la carpeta definitiva con un nombre único.
     * Devuelve la Foto creada, o null si no se pudo guardar.
     */
    public static function guardar(string $rutaTemporal, string $extension): ?self
    {
        if (!is_dir(IMAGES_DIR) && !mkdir(IMAGES_DIR, 0755, true)) {
            return null;
        }

        // Ejemplo: 20261106_091530_a61b8ff8.png (fecha + aleatorio)
        $nombre = date('Ymd_His') . '_' . bin2hex(random_bytes(4)) . '.' . $extension;

        if (!move_uploaded_file($rutaTemporal, IMAGES_DIR . $nombre)) {
            return null;
        }
        return new self($nombre);
    }

    /**
     * Lee la carpeta images/ y devuelve un array de Foto (una por imagen).
     * @return Foto[]
     */
    public static function listar(): array
    {
        if (!is_dir(IMAGES_DIR)) {
            return [];
        }

        $fotos = [];
        foreach (scandir(IMAGES_DIR) as $fichero) {
            $extension = strtolower(pathinfo($fichero, PATHINFO_EXTENSION));
            if (in_array($extension, self::EXTENSIONES, true)) {
                $fotos[] = new self($fichero);
            }
        }
        return $fotos;
    }
}
