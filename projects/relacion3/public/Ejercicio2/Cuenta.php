<?php

    class Cuenta{
        public string $saldoFormateado{
            get{
                return number_format($this->saldo, 2, ',', '.') . ' €';
            }
        }

        public function __construct(
            public float $saldo = 0.0{
                set{
                    if($value < 0){
                        throw new InvalidArgumentException("No puedes tener saldo negativo");
                    }
                    $this->saldo = $value;
                }
            }, 
            public string $titular = 'vicente'{
                set{
                    $this->titular = ucwords(strtolower(trim($value)));
                }
            }){}

        public function __toString(): string{
            return printf(
                    "Saldo: {$this->saldoFormateado} | Titular: {$this->titular}"
            );
        }
    }

?>