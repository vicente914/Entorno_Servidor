<?php
    class CuentaBancaria{

        //constructor
        public function __construct(
            public float $saldo,
            public string $titular
        ){}

        //metodos
        public function depositar(float $monto): void{
            $this->saldo += $monto;
        }

        public function retirar(float $monto): void{
            if($monto < 0){
                throw new InvalidArgumentException("NO puedes retirar saldo negativo");
            }
            elseif($monto > $this->saldo){
                throw new Exception("NO puede retirar tanto dinero");
            }
            else{
                $this->saldo -= $monto;
            }
        }
    }
?>