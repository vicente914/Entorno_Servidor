<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    require_once __DIR__ . ("/Persona.php");
    echo "<h1>Metodos mágicos</h1>";

    $persona1 = new Persona("Vicente", 18, "Granada");

    echo $persona1->getNombre() . "<br>";
    echo $persona1->getEdad() . "<br>";
    echo $persona1->getCiudad() . "<br>";
    $persona1->setNombre("Mateo");
    echo $persona1->getNombre();
?>