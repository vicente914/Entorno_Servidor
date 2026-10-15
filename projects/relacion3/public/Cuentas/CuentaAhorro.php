<?php

    require_once __DIR__ . ("/CuentaBancaria.php");

    class CuentaAhorro extends CuentaBancaria{

        //constructor
        public function __construct(string $titular, private float $interes){
            parent::__construct($titular);
        }

        public function resumen(): string{
            return "Titular: ".$this->titular." | Saldo: ".$this->getSaldo();
        }
    }
?>