<?php

    trait Identificable{

        public function generarId(){
            
            $numAleatorio = random_int(1000, 9999);
            $codigo = $this->getPrefijoId() . $numAleatorio;
            return $codigo; 
        }
        
        abstract protected function getPrefijoId(): string;
    }

?>