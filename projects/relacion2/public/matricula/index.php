<?php
    echo "<h1>Validación de matrículas</h1>";
    function validacionMatricula($matricula){
        return preg_match('/^((?=[0-9]{4})(?=[BCDFGHJKLMNPRSTVWXYZ]{3})){7}$/', $matricula);
    }

    echo (validacionMatricula("123Hola") == 1)? "La matrícula es correcta":"La matrícula no existe";
?>