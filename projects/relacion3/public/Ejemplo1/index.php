<?php
    declare(strict_types=1);

    require_once __DIR__ . "/Cliente.php";

    $cliente1 = new Cliente("Vicente", "Pinar", "123");

    echo $cliente1->getCodigo();


?>