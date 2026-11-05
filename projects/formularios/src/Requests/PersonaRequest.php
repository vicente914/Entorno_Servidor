<?php 
declare(strict_types=1);
namespace Requests;
 
final class PersonaRequest
{
    /** Valores permitidos (whitelist): lo que no esté aquí se rechaza */
    private const SITUACIONES = ['sin_empleo', 'media_jornada', 'tiempo_completo'];
    private const LENGUAJES   = ['C++', 'JavaScript', 'PHP', 'Python', 'Java'];
 
    /** @var array<string, mixed> datos ya saneados */
    private array $datos = [];
 
    /** @var array<string, string> mensajes de error, indexados por campo */
    private array $errores = [];
 
    /** @param array<string, mixed> $entrada el array $_POST recibido */
    public function __construct(array $entrada)
    {
        $this->sanear($entrada);
        $this->validar();
    }
 
    public function esValido(): bool
    {
        return $this->errores === [];
    }
 
    /** @return array<string, string> */
    public function errores(): array
    {
        return $this->errores;
    }
 
    /** @return array<string, mixed> los datos saneados */
    public function datos(): array
    {
        return $this->datos;
    }
 
    private function sanear(array $entrada): void
    {
        // El usuario puede manipular la petición: solo aceptamos textos
        $texto = static fn(mixed $v): string => is_string($v) ? trim(strip_tags($v)) : '';
 
        // lenguajes[] llega como array (o no llega si no se marca ninguno)
        $lenguajes = [];
        if (isset($entrada['lenguajes']) && is_array($entrada['lenguajes'])) {
            foreach ($entrada['lenguajes'] as $l) {
                $lenguajes[] = $texto($l);
            }
        }
 
        $this->datos = [
            'nombre'           => $texto($entrada['nombre'] ?? ''),
            'apellidos'        => $texto($entrada['apellidos'] ?? ''),
            'correo'           => $texto($entrada['correo'] ?? ''),
            'telefono'         => $texto($entrada['telefono'] ?? ''),
            'situacionLaboral' => $texto($entrada['situacionLaboral'] ?? ''),
            'lenguajes'        => $lenguajes,
            'url'              => $texto($entrada['url'] ?? ''),
        ];
    }
 
    private function validar(): void
    {
        $d = $this->datos;
 
        // --- Nombre (obligatorio, 2-50 caracteres) ---
        if ($d['nombre'] === '') {
            $this->errores['nombre'] = "El nombre es obligatorio.";
        }
        elseif (mb_strlen($d['nombre']) < 2) {
            $this->errores['nombre'] = "El nombre debe tener al menos 2 caracteres.";
        }
        elseif (mb_strlen($d['nombre']) > 50) {
            $this->errores['nombre'] = "El nombre no puede superar los 50 caracteres.";
        }
        elseif (!preg_match('/^[\pL\s\-\'\.]+$/u', $d['nombre'])) {
            $this->errores['nombre'] = "El nombre solo puede contener letras, espacios, guiones y puntos.";
        }
 
        // --- Apellidos (obligatorio, 2-100 caracteres) ---
        if ($d['apellidos'] === '') {
            $this->errores['apellidos'] = "Los apellidos son obligatorios.";
        }
        elseif (mb_strlen($d['apellidos']) < 2) {
            $this->errores['apellidos'] = "Los apellidos deben tener al menos 2 caracteres.";
        }
        elseif (mb_strlen($d['apellidos']) > 100) {
            $this->errores['apellidos'] = "Los apellidos no pueden superar los 100 caracteres.";
        }
        elseif (!preg_match('/^[\pL\s\-\'\.]+$/u', $d['apellidos'])) {
            $this->errores['apellidos'] = "Los apellidos solo pueden contener letras, espacios, guiones y puntos.";
        }
 
        // --- Correo (obligatorio, formato válido, máx. 255 caracteres) ---
        if ($d['correo'] === '') {
            $this->errores['correo'] = "El correo es obligatorio.";
        }
        elseif (mb_strlen($d['correo']) > 255) {
            $this->errores['correo'] = "El correo no puede superar los 255 caracteres.";
        }
        elseif (!filter_var($d['correo'], FILTER_VALIDATE_EMAIL)) {
            $this->errores['correo'] = "El formato del correo no es válido.";
        }
 
        // --- Teléfono (opcional, 9-15 dígitos, puede incluir +, espacios o guiones) ---
        if ($d['telefono'] !== '' && !preg_match('/^\+?[0-9\s\-]{9,15}$/', $d['telefono'])) {
            $this->errores['telefono'] = "El teléfono debe tener entre 9 y 15 caracteres (puede incluir +, espacios o guiones).";
        }
 
        // --- Situación laboral (obligatoria, uno de los valores permitidos) ---
        if ($d['situacionLaboral'] === '') {
            $this->errores['situacionLaboral'] = "Debes indicar tu situación laboral.";
        }
        elseif (!in_array($d['situacionLaboral'], self::SITUACIONES, true)) {
            $this->errores['situacionLaboral'] = "La situación laboral seleccionada no es válida.";
        }
 
        // --- Lenguajes (opcional, cada uno debe estar en la lista permitida) ---
        foreach ($d['lenguajes'] as $lenguaje) {
            if (!in_array($lenguaje, self::LENGUAJES, true)) {
                $this->errores['lenguajes'] = "Has seleccionado un lenguaje no válido.";
                break;
            }
        }
 
        // --- URL (obligatoria, formato válido, http/https, máx. 255 caracteres) ---
        if ($d['url'] === '') {
            $this->errores['url'] = "La URL es obligatoria.";
        }
        elseif (mb_strlen($d['url']) > 255) {
            $this->errores['url'] = "La URL no puede superar los 255 caracteres.";
        }
        elseif (
            !filter_var($d['url'], FILTER_VALIDATE_URL)
            || !in_array(parse_url($d['url'], PHP_URL_SCHEME), ['http', 'https'], true)
        ) {
            $this->errores['url'] = "La URL no es válida (debe empezar por http:// o https://).";
        }
    }
}