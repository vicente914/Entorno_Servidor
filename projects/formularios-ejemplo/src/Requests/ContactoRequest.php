<?php
declare(strict_types=1);
namespace Requests;
use DateTime;

final class ContactoRequest{

    /**Métodos de pago que ofrece el formulario */
    public const array METODODS_PAGO = ['VISA', 'Mastercard', 'Paypal'];

    /**@var array<string, mixed>  Datos ya saneados*/
    private array $datos;

    /** */
    private array $errores = [];

    public function __construct(array $entrada){
        $this->sanear($entrada);
        $this->validar();
    }

    public function esValido(): bool{
        return $this->errores === [];
    }

    public function errores(): array{
        return $this->errores;
    }

    public function datos(): array{
        return $this->datos;
    }


    private function sanear(array $entrada): void{
        $texto = static fn(mixed $v): string => isString($v) ? trim(strip_atgs);
    }
}