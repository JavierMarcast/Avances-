<?php
//require_once "Modelo/Cliente.php";
require_once "../Modelo/producto.modelo.php";

Class ControladorProducto{
   static public function ctrSeleccionarProductos($valor){
       $tabla='"PRODUCTO"';
       return $respuesta=ModeloProducto::mdlSeleccionarProductos($tabla,$valor);
   }

}
