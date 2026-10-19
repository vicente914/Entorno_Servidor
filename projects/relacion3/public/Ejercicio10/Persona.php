<?php
    class Persona{
        public function __construct(
            private string $nombre,
            private int $edad,
            private string $ciudad
        ){}

        public function __call(string $funcion, array $argumentos ): mixed{
            $resultado = "No existe tal propiedad";
            if(str_starts_with($funcion, 'get')){
                $propiedad = lcfirst(substr($funcion, 3));
                
                if(property_exists($this, $propiedad)){
                    $resultado = $this->$propiedad;
                }
            }
            elseif(str_starts_with($funcion, 'set')){
                $propiedad = lcfirst(substr($funcion, 3));
                $parametro = $argumentos[0];

                if(property_exists($this, $propiedad)){
                    $this->$propiedad = $parametro;
                }
            }

            return $resultado;
        }
    }
?>