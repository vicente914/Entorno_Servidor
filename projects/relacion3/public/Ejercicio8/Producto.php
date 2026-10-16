<?php
    require_once __DIR__ . ("/Traits.php");
    class Producto{
        use Identificable;

        public function getPrefijoId(): string{
            return "PRD";
        }
    }

?>