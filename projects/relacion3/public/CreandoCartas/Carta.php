<?php

    class Carta{
        const array PALOS = ["ESPADAS", "OROS", "COPAS", "BASTOS"];

        const array VALORES = [
            1=>"as",2=>"dos",3=>"tres",4=>"cuatro",5=>"cinco",6=>"seis",
            7=>"siete",8=>"ocho",9=>"nueve",10=>"sota",11=>"caballo",12=>"rey"
        ];

        public function __construct(
            public int $numero{
                set{
                    if(!isset(self::VALORES[$value])){
                        throw new InvalidArgumentException("No existe una carta con ese número");
                    }
                    $this->numero = $value;
                }

                get{
                    return "Número de la carta: ". $this->numero;
                }
            },

            public string $palo{
                set{
                    $formateado = strtoupper(trim($value));
                    if(!in_array($formateado, self::PALOS)){
                        throw new InvalidArgumentException("No existe ese palo");
                    }
                    $this->palo = strtolower($value);
                }

                get{
                    return "Palo: ". $this->palo;
                }
            }
            
            ){}


        
    }
?>