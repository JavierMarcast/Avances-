<?php
require_once "conexion.php";
 Class ModeloCliente
 {
       static public function mdlRegistroCliente($tabla,$nCliente){
       $stmt = Conexion::conectarAdministrador()->prepare("INSERT INTO
       $tabla(num_cliente,telefono, nombre_contacto, cargo, pais, ciudad, calle, c_p, localidad, provincia, password)
       VALUES(:num_cliente,:telefono,:nombre_contacto,:cargo,:pais,:ciudad,:calle,:c_p,:localidad,:provincia,:password)");

        $key= intdiv((random_int(100000,999999))*(random_int(100,999)),random_int(1,9));
        $telefono = $nCliente->getTelefono();
        $nombre = $nCliente->getNombreContacto();
        $cargo = $nCliente->getCargo();
        $pais = $nCliente->getPais();
        $ciudad = $nCliente->getCiudad();
        $calle = $nCliente->getCalle();
        $cp= $nCliente->getCp();
        $provincia = $nCliente->getProvincia();
        $localidad = $nCliente->getLocalidad();
        $password = $nCliente->getPassword();

        $stmt->bindParam(":num_cliente",$key, PDO::PARAM_INT);
        $stmt->bindParam(":telefono",$telefono, PDO::PARAM_INT);
        $stmt->bindParam(":nombre_contacto",$nombre, PDO::PARAM_STR);
        $stmt->bindParam(":cargo",$cargo, PDO::PARAM_STR);
        $stmt->bindParam(":pais",$pais, PDO::PARAM_STR);
        $stmt->bindParam(":ciudad",$ciudad, PDO::PARAM_STR);
        $stmt->bindParam(":calle",$calle, PDO::PARAM_STR);
        $stmt->bindParam(":c_p",$cp, PDO::PARAM_INT);
        $stmt->bindParam(":localidad",$localidad, PDO::PARAM_STR);
        $stmt->bindParam(":provincia",$provincia, PDO::PARAM_STR);
        $stmt->bindParam(":password",$password, PDO::PARAM_STR);

        if($stmt->execute()){ //Ejemplo aprenderaprogramar.com, archivo escribir.php

         $file = fopen("claves/key.txt", "w");
         fwrite($file,$key. PHP_EOL);
         fclose($file);
         return "ok";
        }
            else
               print_r(Conexion::conectarAdministrador()->errorInfo());
       $stmt->close();
       $stmt->null;
 }
 }
?>
