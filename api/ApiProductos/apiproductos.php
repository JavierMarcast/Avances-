<?php
include_once 'productos.php';

if(isset($_GET['categoria'])){
  $categoria = $_GET['categoria'];
  if ($categoria==''){
echo json_encode(['statuscode'=>400, 'response'=>'no existe esa categoria']);

}else {
$productos = new productos();
$items = $productos->getitemsbycategory($categoria);
echo json_encode(['statuscode'=>200, 'items' => $items ]);



}

}else if (isset($_GET['get-item'])) {
    $id = $_GET['get-item'];
      if ($id == '') {
        echo json_encode(['statuscode'=>400, 'response'=>'no hay valor para id']);
      }else {
      
      $productos = new productos();
      $item = $productos->get($id);
      echo json_encode(['statuscode'=>200, 'item' => $items ]);
      }   
}



else {
  echo json_encode(['statuscode'=>400, 'response'=>'no hay accion']);

}


 ?>
