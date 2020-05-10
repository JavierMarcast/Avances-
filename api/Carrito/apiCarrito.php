<?php
include_once 'carrito.php';
    if (isset($_GET['action'])){
        $action =$_GET ['action'];
        $carrito = new Carrito();

        switch ($action) {
            case 'mostrar':
            mostrar($carrito);
            break;

            case 'add':
            add($carrito);
            break;

            case 'remove':
            remove($carrito);
            break;
            
            default:

        }
    }else {
        echo json_encode(['statuscode'=> 404,
                              'response'=> 'No se puede procesar la solicitud'  ]);

    }
    function mostrar ($carrito){
        $itemsCarrito = json_decode($carrito->load(),1);
        $fullItems = [];
        $total = 0;
        $totalItems = 0;

        foreach ($itemsCarrito as $itemCarrito) {
            $httpRequest = file_get_contents('http://localhost/p1/api/Apiproductos/apiproductos.php?get-item='.$itemCarrito['id']);
        }
    }

    function add ($carrito){
        
    }

    function remove ($carrito){
        
    }

?>