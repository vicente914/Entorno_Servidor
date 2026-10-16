<?php

    require_once __DIR__ . ("/Traits.php");
    class Usuario{
        use Identificable;

        public function getPrefijoId(): string{
            return "USR";   
        }
    }

?>