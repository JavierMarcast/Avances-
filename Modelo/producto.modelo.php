<?php
require_once "conexion.php";
 Class ModeloCliente
 {

 static public function  mdlSeleccionarProductos($tabla,$valor){

  if($valor==null){

     $stmt = Conexion::conectarAdministrador()->prepare("SELECT * FROM  $tabla");
     $stmt->execute();
     return $stmt-> fetchAll();

  }  else{

         $stmt = Conexion::conectarAdministrador()->prepare("SELECT * FROM  $tabla
         WHERE codigop = :codigop");
         $stmt->bindParam(":codigop", $valor, PDO::PARAM_INT);
         $stmt->execute();
         return $stmt-> fetch();

        }

     $stmt->close();
     $stmt->null;
 }
 }
 ?>
