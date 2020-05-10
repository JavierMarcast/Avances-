<?php
session_start();
$sErr="";
$sCve="";
$sNom="";
	/*Verificar que hayan llegado los datos*/
	if (isset($_SESSION["TipoUsuario"])&&isset($_SESSION["validarIngreso"])){
		session_destroy();
	}
	else
		$sErr = "Falta establecer el login";

	if ($sErr == "")
		header("Location: ../index.php");
	else
    header("Location: ../index.php?pagina=ErrorLogin");
	exit();
?>
