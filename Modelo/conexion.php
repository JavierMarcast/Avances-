<?php
error_reporting(E_ALL ^ E_NOTICE);
Class Conexion {
  static public function conectarAdministrador(){
    $link = new PDO("pgsql:host=localhost;port=5432;dbname=Anaqueles","postgres","tincas");
    $link-> exec("set names utf8");
    return $link;
  }
}
?>
