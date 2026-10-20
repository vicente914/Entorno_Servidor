<?php
    declare(strict_types=1);

    require_once __DIR__ . ("/../autoloader.php");

    use Enums\Palo;
    use Enums\Valor;
    use Models\Baraja;
    use Models\Carta;
    use Lib\Pages;


    /*
    //Creamos una carta
    $carta = new Carta(Valor::As, Palo::Oros);
    echo "Carta: $carta<br>";
    echo "Numero: {$carta->getNumero()}<br>";
    echo "Palo: {$carta->getPalo()->value}<br>";
    echo "Imagen: {$carta->getNombreImagen()}<br><br>";

    //Creamos una baraja
    $baraja = new Baraja();
    echo "Cartas al crear la baraja: {$baraja->totalCartas()}<br>";

    $cartas = $baraja->getCartas();
    echo "Primera: {$cartas[0]}<br>";
    echo "Ultima: {$cartas[array_key_last($cartas)]}<br><br>";

    //Barajamos
    $baraja->barajar();
    $cartas = $baraja->getCartas();
    echo "Primera carta despues de barajar: {$cartas[0]}<br>";

    //Sacamos tres cartas
    for($i = 1; $i <=3; $i++){
        $sacada = $baraja->sacarCarta();
        echo "Carta $i: $sacada (quedan{$baraja->totalCartas()})<br>";
    }


    //vaciar la baraja y comprobar que devuelve null
    while($baraja->totalCartas() > 0){
        $baraja->sacarCarta();
    }

    echo "<br>Cartas restantes: {$baraja->totalCartas()}<br>";
    var_dump($baraja->sacarCarta());
    */

    $baraja = new Baraja();

    $pages = new Pages();
    

    $baraja->barajar();
    $pages->render('baraja/muestraBaraja', [
        'cartas' => $baraja->getCartas(),
        'titulo' => 'Baraja completa',
    ]);

?>
