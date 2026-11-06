<?php
declare(strict_types=1);

namespace Requests;

/**
 * Valida el archivo recibido en $_FILES['foto'].
 * Solo valida: NO mueve ni guarda nada (eso lo hace el modelo Foto).
 */
final class FotoRequest
{
    private const TAM_MAX = 2 * 1024 * 1024; // 2 MB

    // Tipos MIME permitidos => extensión segura que les corresponde
    private const PERMITIDOS = [
        'image/jpeg' => 'jpg',
        'image/png'  => 'png',
        'image/gif'  => 'gif',
    ];

    // Mensajes para los códigos de error de PHP al subir archivos
    private const ERRORES_SUBIDA = [
        UPLOAD_ERR_INI_SIZE   => 'El archivo supera el tamaño máximo permitido por el servidor.',
        UPLOAD_ERR_FORM_SIZE  => 'El archivo supera el tamaño máximo permitido por el formulario.',
        UPLOAD_ERR_PARTIAL    => 'El archivo se subió solo parcialmente.',
        UPLOAD_ERR_NO_FILE    => 'No has seleccionado ningún archivo.',
        UPLOAD_ERR_NO_TMP_DIR => 'Falta la carpeta temporal del servidor.',
        UPLOAD_ERR_CANT_WRITE => 'No se pudo escribir el archivo en el disco.',
        UPLOAD_ERR_EXTENSION  => 'Una extensión de PHP detuvo la subida.',
    ];

    private array $errores = [];
    private ?string $mimeReal = null;

    public function __construct(private array $archivo)
    {
        $this->validar();
    }

    private function validar(): void
    {
        // 1. ¿Llegó algo y hubo algún error en la transferencia?
        $codigo = $this->archivo['error'] ?? UPLOAD_ERR_NO_FILE;
        if (!is_int($codigo)) {
            $this->errores['foto'] = 'Petición no válida.';
            return;
        }
        if ($codigo !== UPLOAD_ERR_OK) {
            $this->errores['foto'] = self::ERRORES_SUBIDA[$codigo] ?? 'Error desconocido en la subida.';
            return;
        }

        // 2. Tamaño máximo
        if ($this->archivo['size'] > self::TAM_MAX) {
            $this->errores['foto'] = 'El archivo supera los 2 MB permitidos.';
            return;
        }

        // 3. ¿Viene realmente de una subida HTTP POST?
        $tmp = $this->archivo['tmp_name'];
        if (!is_uploaded_file($tmp)) {
            $this->errores['foto'] = 'Petición no válida.';
            return;
        }

        // 4. Tipo MIME REAL (fileinfo mira el contenido), no el $_FILES['foto']['type'] del navegador
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $tmp);

        if (!is_string($mime) || !array_key_exists($mime, self::PERMITIDOS)) {
            $this->errores['foto'] = 'Formato no permitido. Solo se aceptan JPG, PNG y GIF.';
            return;
        }
        $this->mimeReal = $mime;
    }

    public function esValido(): bool
    {
        return $this->errores === [];
    }

    public function errores(): array
    {
        return $this->errores;
    }

    public function rutaTemporal(): string
    {
        return $this->archivo['tmp_name'];
    }

    // La extensión sale del MIME real, nunca del nombre que da el usuario
    public function extension(): string
    {
        return self::PERMITIDOS[$this->mimeReal];
    }
}
