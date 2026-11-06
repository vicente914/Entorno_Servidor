<?php
declare(strict_types=1);

namespace Models;

/**
 * Modelo Articulo: representa un artículo de la tienda y
 * es quien conoce los datos (aquí, un array fijo en lugar de una base de datos).
 */
final class Articulo
{
    // "Base de datos" de artículos: array asociativo indexado por ID
    private const ARTICULOS = [
        1 => [
            'id'          => 1,
            'nombre'      => 'Portátil Zenbook 14',
            'descripcion' => 'Ultrabook de 14 pulgadas con 16 GB de RAM y SSD de 512 GB.',
            'precio'      => 899.99,
        ],
        2 => [
            'id'          => 2,
            'nombre'      => 'Ratón inalámbrico Logi M185',
            'descripcion' => 'Ratón óptico inalámbrico con receptor USB y 12 meses de batería.',
            'precio'      => 14.50,
        ],
        3 => [
            'id'          => 3,
            'nombre'      => 'Teclado mecánico K2',
            'descripcion' => 'Teclado mecánico compacto con retroiluminación y conexión Bluetooth.',
            'precio'      => 79.90,
        ],
        99 => [
            'id'          => 99,
            'nombre'      => 'Auriculares Studio BT',
            'descripcion' => 'Auriculares inalámbricos con cancelación de ruido y 30 h de autonomía.',
            'precio'      => 129.00,
        ],
    ];

    public function __construct(
        private int $id,
        private string $nombre,
        private string $descripcion,
        private float $precio
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    /**
     * Busca un artículo por su identificador.
     * Devuelve el Articulo si existe, o null si no se ha encontrado.
     */
    public static function buscarPorId(int $id): ?self
    {
        if (!isset(self::ARTICULOS[$id])) {
            return null;
        }

        $datos = self::ARTICULOS[$id];
        return new self($datos['id'], $datos['nombre'], $datos['descripcion'], $datos['precio']);
    }
}
