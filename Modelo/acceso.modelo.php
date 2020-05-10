<?php
require_once "conexion.php";
Class ModeloAcceso{
      static public function mdlConsultaUsuario($tabla,$item1,$item2,$campo1,$campo2){

                  $stmt = Conexion::conectarAdministrador()->prepare("SELECT * FROM  $tabla
                  WHERE $campo1=:$campo1 AND $campo2 =:$campo2");

                  $stmt->bindParam(":".$campo1, $item1, PDO::PARAM_INT);
                  $stmt->bindParam(":".$campo2, $item2, PDO::PARAM_STR);

                  $stmt->execute();
                  return $stmt-> fetch();


                      $stmt->close();
                      $stmt->null;
                 }
}
?>
