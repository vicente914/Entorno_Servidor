<?php
    class CuentaBancaria{
        //propiedades

        //constructor
        public function __construct(protected string $titular, private float $saldo = 0){
        }


        public function getSaldo(): float{
            return $this->saldo;
        }

        public function ingresar(float $cantidad): void{
            try{
                if($cantidad < 0){
                    throw new Exception("No puede ingresar una cantidad negativo");
                }
                else{
                    $this->saldo += $cantidad;
                }
            }
            catch(Exception $e1){
                echo $e1->getMessage();
            }
        }


        public function retirar(float $cantidad): void{
            try{
                if($cantidad < 0){
                    throw new InvalidArgumentException("No puedes retirar una cantidad negativa");
                }
                elseif($cantidad > $this->saldo){
                    throw new RangeException("No tienes saldo suficiente para retirar esa cantidad");
                }
                else{
                    $this->saldo -= $cantidad;
                }
            }
            catch(InvalidArgumentException $e1){
                echo $e1->getMessage();
            }
            catch(RangeException $e2){
                echo $e2->getMessage();
            }
        }
    }


?>