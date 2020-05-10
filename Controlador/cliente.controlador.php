<?php
require_once "Modelo/Cliente.php";
require_once "Modelo/Cliente.modelo.php";

Class ControladorCliente{
   static public function ctrRegistro(){
     if(isset($_POST["registroTxtNombre"])){
       $tabla ='"CLIENTE"';
       $nCliente = new Cliente();
       $nCliente->setTelefono($_POST["registroTxtTelefono"]);
       $nCliente->setNombreContacto($_POST["registroTxtNombre"]);
       $nCliente->setCargo($_POST["registroTxtCargo"]);
       $nCliente->setPais($_POST["registroTxtPais"]);
       $nCliente->setCiudad($_POST["registroTxtCiudad"]);
       $nCliente->setCalle($_POST["registroTxtCalle"]);
       $nCliente->setCp($_POST["registroTxtCP"]);
       $nCliente->setLocalidad($_POST["registroTxtLocalidad"]);
       $nCliente->setProvincia($_POST["registroTxtProvincia"]);
       $nCliente->setPassword($_POST["registroTxtPassword"]);

           return $respuesta=ModeloCliente::mdlRegistroCliente($tabla,$nCliente);

   }

   }

}
