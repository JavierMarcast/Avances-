<?php
session_start();
include_once("..\Modelo\Vendedor.php");
include_once("..\Modelo\Cliente.php");
include_once("..\Modelo\acceso.modelo.php");
$sErr="";
$tUsr="";
$cUsr1="";
$cUsr2="";
$tTbl="";
$respuesta="";

	/*Verificar que hayan llegado los datos*/
	if (isset($_POST["txtCve"]) && !empty($_POST["txtCve"]) &&
	  	isset($_POST["txtPwd"]) && !empty($_POST["txtPwd"]) &&
      isset($_POST["txtUsr"]) && !empty($_POST["txtUsr"])){

      $tUsr = $_POST["txtUsr"];

      if($tUsr=="Vendedor"){
          $oUsr = new Vendedor();

          $oUsr -> setCodigoV($_POST["txtCve"]);
          $oUsr -> setPassword($_POST["txtPwd"]);
          $tTbl = '"VENDEDOR"';
          $cUsr1 ="codigov";
          $cUsr2 ="password";
          $respuesta= ModeloAcceso::mdlConsultaUsuario($tTbl,$oUsr->getCodigoV(),$oUsr->getPassword(),$cUsr1,$cUsr2);

          if($respuesta)
                        {
                        if($respuesta["codigov"]==$_POST["txtCve"] &&
                           $respuesta["password"]==$_POST["txtPwd"]){
                           $_SESSION["validarIngreso"]="ok";
                           $_SESSION["NombreUsuario"]="".$respuesta["nombre"];
                           $_SESSION["TipoUsuario"]="".$tUsr;
                           header("Location: ../Vista/inicio.php");
                        }
                    }
             else
                header("Location: ../index.php?pagina=ErrorLogin");
          }
          else
              if($tUsr=="Administrador"){

                $oUsrClv =($_POST["txtCve"]);
                $oUsrPsd =($_POST["txtPwd"]);
                $tTbl = 'usuarios."ACCESO_PRIVILEGIADO"';
                $cUsr1 ="id";
                $cUsr2 ="password";
                $respuesta= ModeloAcceso::mdlConsultaUsuario($tTbl,$oUsrClv,$oUsrPsd,$cUsr1,$cUsr2);
                if($respuesta)
                              {
                              if($respuesta["id"]==$_POST["txtCve"] &&
                                 $respuesta["password"]==$_POST["txtPwd"]){
                                 $_SESSION["validarIngreso"]="ok";
                                 $_SESSION["NombreUsuario"]="Juan Perez";
                                 $_SESSION["TipoUsuario"]="".$tUsr;
                                 header("Location: ../Vista/inicio.php");
                              }
                          }
                   else
                      header("Location: ../index.php?pagina=ErrorLogin");

              }
              else {
                $oUsr = new Cliente();

                $oUsr -> setNumCliente($_POST["txtCve"]);
                $oUsr -> setPassword($_POST["txtPwd"]);
                $tTbl = '"CLIENTE"';
                $cUsr1 ="num_cliente";
                $cUsr2 ="password";
                $respuesta= ModeloAcceso::mdlConsultaUsuario($tTbl,$oUsr->getNumCliente(),$oUsr->getPassword(),$cUsr1,$cUsr2);

                if($respuesta)
                              {
                              if($respuesta["num_cliente"]==$_POST["txtCve"] &&
                                 $respuesta["password"]==$_POST["txtPwd"]){
                                 $_SESSION["validarIngreso"]="ok";
                                 $_SESSION["NombreUsuario"]="".$respuesta["nombre_contacto"];
                                 $_SESSION["TipoUsuario"]="".$tUsr;
                                 header("Location: ../Vista/inicio.php");
                              }
                          }
                   else
                      header("Location: ../index.php?pagina=ErrorLogin");

              }
     }

?>
