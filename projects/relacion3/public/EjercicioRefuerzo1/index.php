<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio refuerzo 1</title>
</head>
<body>
    
</body>
</html>

<?php
    require_once __DIR__ . ("/Empleado.php");

    $emp1 = new Empleado("vicente", 1000.00, "1");

    echo $emp1->getSalarioAnual();
?>