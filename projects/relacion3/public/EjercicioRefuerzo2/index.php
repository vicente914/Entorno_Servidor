<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio refuerzo 2</title>
</head>
<body>
    
</body>
</html>

<?php
    require_once __DIR__ . ("/CuentaAhorro.php");

    $cuentaBanc1 = new CuentaBancaria(10000, "Vicente");
    $cuentaAh1 = new CuentaAhorro(10000, "Gabriel");

    $cuentaBanc1->retirar(500);
    echo $cuentaBanc1->saldo . "<br>";

    $cuentaAh1->retirar(500);
    echo $cuentaAh1->saldo . "<br>";

?>