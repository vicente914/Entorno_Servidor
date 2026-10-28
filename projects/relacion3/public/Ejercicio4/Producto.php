<?php
    class Producto{
        //propiedades
        private static int $contadorObjetos = 0;
        public const float IVA = 0.21;


        //constructor
        public function __construct(){
            self::$contadorObjetos += 1; //accedemos a propiedades estaticas mediante self
        }

        //metodos

        public static function obtenerCantidadObjetos(): int{
            return self::$contadorObjetos;
        }
    }
?>