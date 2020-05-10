<?php
$fichero_local = 'C:\xampp\htdocs\Proyecto\claves\key.txt';
$nombre_fichero = 'clave-usuario.txt';

if( file_exists($fichero_local ) && is_file($fichero_local) ) {
	header('Cache-control: private');
	header('Content-Type: application/octet-stream');
	header('Content-Length: '.filesize($fichero_local));
	header('Content-Disposition: filename='.$nombre_fichero);

    flush();
     $file = fopen($fichero_local , "rb");

     print fread ($file, filesize($fichero_local ));
     fclose($file);
     
} else {

    die('Error:  El fichero  '.$fichero_local .' no existe!');
}
?>
