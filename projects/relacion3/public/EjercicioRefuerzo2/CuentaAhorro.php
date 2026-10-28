<?php
    require_once __DIR__ . ("/CuentaBancaria.php");
    class CuentaAhorro extends CuentaBancaria{

        //constructor
        public function __construct(float $saldo, string $titular){
            parent::__construct($saldo, $titular);
        }


        //metodos
        public function retirar(float $monto): void{
            
            if($monto > $this->saldo){
                throw new Exception("NO tienes tanto saldo para retirar");
            }
            elseif($monto < 0){
                throw new InvalidArgumentException("NO puedes retirar saldo negativo");
            }
            else{
                $comision = $monto * 0.02;
                $totalRetirado = $monto + $comision;
                $this->saldo -= $totalRetirado;
            }
        }


    }
?>