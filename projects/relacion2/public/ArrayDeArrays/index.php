<?php
    echo "<h1>Array de Arrays</h1>";

    $profesores = [
        [
            'numRegistro' => 1234,
            'nombre' => 'Pablo',
            'apellido' => "Payez",
            'telefono' => 123456789,
            'fechaNac' => "2/4/2000"
        ],

        [
            'numRegistro' => 4321,
            'nombre' => "Juan",
            'apellido' => "Completo",
            'telefono' => 987654321,
            'fechaNac' => "22/11/1995"
        ],

         [
            'numRegistro' => 2314,
            'nombre' => "Eduardo",
            'apellido' => "Payerez",
            'telefono' => 123456789,
            'fechaNac' => "10/12/1997"
        ]

    ];

    //echo $profesores[0]['numRegistro'];
    /*
    function mostrarNumRegistro($profesores){
        array_map(function($profesor){
            echo "Nombre: ".$profesor['nombre']."|Número de registro: ".$profesor['numRegistro']."<br>";
            }, 
            $profesores);
    }
    */
    function mostrarNumRegistro($profesores){
        $resultado = array_map(
            fn($profesor) => "Nombre: ".$profesor['nombre']."|Número de registro: ".$profesor['numRegistro'], 
            $profesores
        );
        echo implode("<br>", $resultado);
    }

    mostrarNumRegistro($profesores);

?>