<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property hooks</title>
</head>
<body>
    
</body>
</html>
<?php
    require_once __DIR__.("/Cuenta.php");

    $cuenta1 = new Cuenta();

    $cuenta1->saldo = 100.5;

    $cuenta1->__toString();
?>