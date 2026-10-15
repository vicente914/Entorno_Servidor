<?php
    //Funcion para generar un array de cliente con sus datos
    function generarClientes(): array{
        
        $clientes = [
            [
                "idCliente"=>1,
                "nombre"=>"Vicente"
            ],

            [
                "idCliente"=>2,
                "nombre"=>"Mateo"
            ],

            [
                "idCliente"=>3,
                "nombre"=>"Alvaro"
            ],

            [
                "idCliente"=>4,
                "nombre"=>"Dylan"
            ]


        ];
    
        return $clientes;
    }

    //Genera un array catalogo que contiene otros arrays(productos con sus datos)
    function generarCatalogo():array{
        $catalogo =[
            [
                "nombre"=> "Cuaderno-A4",
                "precio"=>2.50,
                "pesoKg"=>1.0,
                "stock"=>8,
                "descuento"=>10.0
            ],

            [
                "nombre"=>"Boligrafo",
                "precio"=>0.90,
                "pesoKg"=>0.4,
                "stock"=>25,
                "descuento"=>null
            ],

            [
                "nombre"=> "Archivador",
                "precio"=> 4.20,
                "pesoKg"=> 3.0,
                "stock"=> 1,
                "descuento"=> 15.0
            ]
        ];

        return $catalogo;
    
    }

    //Genera una lista de pedidos donde un cliente aletaorio pide un producto aleatorio del catalogo
    function generarPedidos(&$catalogo, &$clientes): array{
        $pedidos = [];
        for($i = 0; $i < 15; $i++){
            $pedidos[] = [
                "id"=>$i,
                "cliente"=>$clientes[random_int(0, count($clientes))],
                "producto"=>$catalogo[random_int(0,count($catalogo))],
                "unidades"=>random_int(1, 5)
            ];   
        }

        return $pedidos;
    }

    /*
    function procesarPedidos(&$pedidos): array{
        
        $pedido = array_pop($pedidos);
        
        return $pedido;
    }
    */



?>