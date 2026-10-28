<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repato de mercancías</title>
</head>
<body>
    
</body>
</html>



<?php
    require_once __DIR__ . "/funciones.php";
    echo "<h1>Reparto de mercancias</h1>";

    $clientes = generarClientes();
    $catalogo = generarCatalogo();

    $pedidos = generarPedidos($catalogo, $clientes);
    var_dump($pedidos);

?>
