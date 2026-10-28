<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacion de ejercicios1</title>
    <link rel=stylesheet href=styles/style.css>
</head>
<body>
    <h2>Tipos de datos básicos</h2>
    <?php
        $pais = 'España';
        $habitantes = 4500000;
        $continente = 'Europa';

        echo "Pais: " . $pais . " Tipo: " . gettype($pais) . "<br>";
        echo "Número de habitantes: ". $habitantes . " Tipo: " . gettype($habitantes) . "<br>";
        echo "Continente: ". $continente . "Tipo: ". gettype($continente);
    ?>



    <h2>Conversor euros a dolares</h2>
    <?php
        $euro = 50;
        $dolar = $euro * 1.14;

        echo "Euros: ".$euro . "<br>";
        echo "Dolares: ".$dolar;
    ?>

    <h2>Cuadrado de números naturales</h2>
    <?php
    
        $num = 1;

        while($num <= 40){
            echo "El cuadrado de ".$num." = ". $num**2 . "<br>";
            $num++;
        }
    
    
    ?>



    <h2>Esfera</h2>
    <h3>Longitud, superficie y volumen</h3>

    <?php
    /*
        $radio = 10;
        
        $longitud = 2 * pi() * $radio;
        $superficie = 4 * pi() * $radio**2;
        $volumen = 4/3 * pi() * $radio**3;

        echo "LONGITUD: ". round($longitud, 2) . "<br>";
        echo "SUPERFICIE: " . round($superficie, 2) . "<br>";
        
        echo "VOLUMEN: ";
        printf("%.2f", $volumen);
        */
    ?>

    <h2>Ecuación de segundo grado</h2>
    <?php
        
        $a = 5;
        $b = 25;
        $c = 15;
        try{
            if($a === 0){
                throw new Exception('No se puede dividir entre 0');
            }

            $contRaiz = $b**2 - 4 * $a * $c;

            $result1 = (-$b + sqrt($contRaiz))/(2 * $a);
            $result2 = (-$b - sqrt($contRaiz)) / (2 * $a);

            printf("Primer resultado: %.2f<br> Segundo resultado: %.2f", $result1, $result2);
        }
        catch(Exception $e){
            echo "ERROR: " . $e->getMessage();
        }
        

    ?>

    <h2>Diccionario de números</h2>

    <table>
        <tr>
            <td><?echo "One"?></td>
            <td><?echo "Uno"?></td>
        </tr>
         <tr>
            <td><?echo "Two"?></td>
            <td><?echo "Dos"?></td>
        </tr>
         <tr>
            <td><?echo "Tree"?></td>
            <td><?echo "Tres"?></td>
        </tr>
         <tr>
            <td><?echo "Four"?></td>
            <td><?echo "Cuatro"?></td>
        </tr>
         <tr>
            <td><?echo "Five"?></td>
            <td><?echo "Cinco"?></td>
        </tr>
         <tr>
            <td><?echo "Six"?></td>
            <td><?echo "Seis"?></td>
        </tr>
         <tr>
            <td><?echo "Seven"?></td>
            <td><?echo "Siete"?></td>
        </tr>
         <tr>
            <td><?echo "Eight"?></td>
            <td><?echo "Ocho"?></td>
        </tr>
         <tr>
            <td><?echo "Nine"?></td>
            <td><?echo "Nuevo"?></td>
        </tr>
         <tr>
            <td><?echo "Ten"?></td>
            <td><?echo "Diez"?></td>
        </tr>
    </table>


    <h2>Tablas de multiplicar</h2>
    <?php
        for($i = 1; $i <= 10; $i++){
            echo"<h3>TABLA DEL ". $i . "</h3>";
            for($j = 1; $j <= 10; $j++){
                echo $i . "x" . $j . "=" . $i*$j . "<br><br>";
            }
        }
    ?>


    <h2>Representación númerica en diferentes bases</h2>
    <?php
        echo "<table border = 1>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>DECIMAL</th>";
                    echo "<th>BINARIO</th>";
                    echo "<th>OCTAL</th>";
                    echo "<th>HEXADECIMAL</th>";
            echo "</thead>";
            echo "<tbody>";
                for($i = 0; $i <= 20; $i++){
                    echo "<tr>";
                        printf("<td>%d</td>", $i);
                        printf("<td>%b</td>", $i);
                        printf("<td>%o</td>", $i);
                        printf("<td>%x</td>", $i);
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table>";
    
    ?>

    <h2>Cadena al revés</h2>
    <?php
        $cadena = "Vicente";
        echo $cadena;
        echo "<br>";
        for($i = mb_strlen($cadena) - 1; $i >= 0; $i--){
            echo mb_substr($cadena, $i, 1);
        }
    ?>

    <h2>Pirámide</h2>
    <?php
        for($i = 1; $i <= 5; $i++){
            
            for($j = 1; $j <= 5 - $i; $j++){
                echo "&nbsp;";
            }

            for($j = 1; $j <= (2 * $i - 1); $j++){
                echo "*";
            }

            echo "<br>";
        }
    ?>

    <h2>Fechas suma y resta</h2>
    <?php

        $fechaHoy = date('Y-m-d');
        echo "Fecha de hoy: ". $fechaHoy . "<br>";

        $fechaAyer = date ('Y-m-d', strtotime("-1day", strtotime($fechaHoy)));
        echo "Fecha de ayer: ". $fechaAyer . "<br>";

        $fechaManiana = date('Y-m-d', strtotime("+1day", strtotime($fechaHoy)));
        echo "Fecha de mañana: ". $fechaManiana . "<br>";
    ?>

    <h2>Calculadora</h2>
        <?php
        /*
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            
            echo "Suma: " . $num1 + $num2 . "<br>";
            echo "Resta: " . $num1  -  $num2 . "<br>";
            echo "Multiplicación: " . $num1  *  $num2 . "<br>";
            echo "Division: " . $num1  /  $num2 . "<br>";
        */
        ?>


    <h2>Números entre 2 valores</h2>
    <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        if(filter_var($num1, FILTER_VALIDATE_INT) === false || filter_var($num2, FILTER_VALIDATE_INT) === false){
            echo "Faltan valores.";
        }
        else{
            if($num1 >= $num2){
                echo "El primer valor no puede ser mayor o igual que el segundo valor";
            }
            else{
                echo "Números entre ".$num1 ." y ".$num2.": ";
                for($i = $num1 + 1; $i < $num2; $i++){
                    echo $i . " ";
                }
            }
        }
    ?>


    <h2>Dibuja línea</h2>
    <?php
        $longitud = $_GET['longitud'];

        
        echo "Longitud: ". $longitud . "<br>";
        print "<svg width = '$longitud' height='20'>";
        print "<line x1='0' y1='10' x2='$longitud' y2='10' stroke='black'>";
        print "</svg>";
    ?>
    <h2>Ejemplo 1</h2>
    <?php
    /*
    if(is_null($_GET["nombre"])){
        echo "Error, falta el parámetro nombre";
    }
    else if($_GET["nombre"] == "Maria"){
        echo"Hola" . $_GET["nombre"];
    }
    else{
        echo "No tiene permiso para acceder a este recurso";
    }
       
    ?>

    <h2>Ejemplo 2</h2>
    <?php
    
        $n1 = (int)$_GET['num1'];
        $n2 = (int)$_GET['num2'];
            
        echo $n1 . ": " . gettype($n1) . "<br>";
        echo $n2 . ": " . gettype($n2) . "<br>";
        if(!$n1 or !$n2)
            echo "Faltan parámetros, revisa num1 y num2"; 
        elseif(!is_numeric($n1) or !is_numeric($n1))
            echo "num1 y num2 tienen que ser números";   
        else
            echo "<br> El resultado de la suma es: ". $_GET['num1'] + $_GET['num2'];
        */
    ?>
    
</body>
</html>

