<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas de banco</title>
</head>
<body>
    
</body>
</html>

<?php
    require_once __DIR__.("/CuentaAhorro.php");

    $cuenta1 = new CuentaBancaria("Vicente");
    $cuenta2 = new CuentaAhorro("Mateo", 1.21);

    echo "<h2>Cuenta Bancaria</h2>";
    echo $cuenta1->getSaldo() . "<br>";
    $cuenta1->ingresar(500);
    echo $cuenta1->getSaldo() . "<br>";

    $cuenta1->retirar(200);
    echo $cuenta1->getSaldo() . "<br>";

    echo "<h2>Cuenta de ahorro </h2>";
    echo $cuenta2->resumen()."<br>";
    $cuenta2->ingresar(99999999999);
    echo $cuenta2->resumen();
?>