<?php
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacion 2 PHP</title>
</head>
<body>
    <h1>Funciones</h1>

    
    <?php
    /*
        echo "<h2>Funciones predefinidas</h2>";
        $nula = null;
        $entero = 5;
        $indefinida = "hola";
        unset($indefinida);


        //Comportamiento de print/echo, transforma true en 1 y false en ""
        //Estado de variable null
        print "<h3>Con variable igual a null</h3>";
        print "Resultado de is_null: ".is_null($nula) .  "<br>"; 
        print "Resultado de isset: ".isset($nula). "<br>";
        print "Resultado de empty: ".empty($nula). "<br>";
        print "Resultado de is_int: ".is_int($nula)."<br>";
        var_dump(is_null($nula));
        var_dump(isset($nula));
        var_dump(empty($nula));
        var_dump(is_int($nula));

        print "<h3>Con variable igual a un entero</h3>";
        var_dump(is_null($entero));
        var_dump(isset($entero));
        var_dump(empty($entero));
        var_dump(is_int($entero));
        

        print "<h3>Con variable indefinida</h3>";       
        var_dump(isset($indefinida));
        var_dump(empty($indefinida));
    */
    ?>


    
    <?php
    /*
        echo "<h2>Cadenas</h2>";
        function comprobarCadena($cadena){
            $resultado = "";
            if(is_string($cadena)){
                if(empty($cadena)){
                    $resultado = "Este es el relleno porque estaba vacía";
                }
                else{
                    $resultado = mb_strtoupper($cadena);
                }
            }
            else{
                $resultado = $cadena . " no es una cadena de caracteres";
            }

            return $resultado;
        }

        echo comprobarCadena(1232);
        */
    ?>


    <?php
    /*
        echo "<h2>Potencias</h2>";
        function potenciaDeNumero($base, $exponente = 2){
            return $base . " elevado a ". $exponente . " es igual a ". $base ** $exponente;
        }

        echo potenciaDeNumero(3, 3);
    */
    ?>


    <?php
    /*
        echo "<h2>Funciones predefinidas de texto</h2>";
        $cadena = "Hola, mundo.¿Qué tal estás hoy?";
        echo "Cadena original: ".$cadena . "<br>";
        echo "La longitud total de la cadena: ".mb_strlen($cadena)."<br>";
        echo "Los 12 primeros caracteres: ".mb_substr($cadena, 0, 12)."<br>";
        echo "Buscamos la posición en la que empieza la palabra Mundo con la M mayúscula: ". mb_strpos($cadena, "Mundo")."<br>";
        echo "Buscamos la posición en la que empieza la palabra Mundo con la M mayúscula: ". mb_strpos($cadena, "mundo")."<br>";
        echo "Convertimos a mayúsculas: ".strtoupper($cadena)."<br>";
        echo "Convertimos a mayúsculas con UTF-8: ".mb_strtoupper($cadena)."<br>";
        echo "Todas en minúsculas: ".strtolower($cadena)."<br>";
        echo "Devuelve a partir del punto (incluido): ".mb_strstr($cadena, ".")."<br>";
        echo "La cadena al revés: ".strrev($cadena);
     */   
    ?>


    <?php
    /*
        echo "<h2>Tipado estricto</h2>";
        function AhundredTimes(int|float $num): ?string {
            $resultado = null;
            if($num > 0){
                $resultado = "El resultado es: ".$num * 100;
            }
            return $resultado;
        }

        try{
            echo AhundredTimes(10);
        }
        catch(TypeError $e){
            echo "Error con el tipo de dato: ". $e->getMessage();
        }
        */
    
    ?>


    <?php
    /*
        include "funcion.php";

        echo obtenerFechaCastellano();
    */
    ?>

</body>
</html>