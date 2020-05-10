<?php
class Cliente{
	private $numCliente=0;
	private $telefono=0;
	private $nombreContacto="";
	private $cargo=0;
  private $pais="";
  private $ciudad="";
  private $calle="";
  private $cp=0;
  private $localidad="";
  private $provincia=0;
  private $password="";


    function setNumCliente($pNumCliente){
       $this->numCliente = $pNumCliente;
    }
    function getNumCliente(){
       return $this->numCliente;
    }


    function setTelefono($pTelefono){
       $this->telefono = $pTelefono;
    }
    function getTelefono(){
       return $this->telefono;
    }


    function setNombreContacto($pNombreContacto){
       $this->nombreContacto = $pNombreContacto;
    }
    function getNombreContacto(){
       return $this->nombreContacto;
    }


    function setCargo($pCargo){
       $this->cargo = $pCargo;
    }
    function getCargo(){
       return $this->cargo;
    }


    function setPais($pPais){
       $this->pais = $pPais;
    }
    function getPais(){
       return $this->pais;
    }


    function setCiudad($pCiudad){
       $this->ciudad = $pCiudad;
    }
    function getCiudad(){
       return $this->ciudad;
    }

    function setCalle($pCalle){
       $this->calle = $pCalle;
    }
    function getCalle(){
       return $this->calle;
    }

    function setCp($pCp){
       $this->cp = $pCp;
    }
    function getCp(){
       return $this->cp;
    }


    function setLocalidad($pLocalidad){
       $this->localidad = $pLocalidad;
    }
    function getLocalidad(){
       return $this->localidad;
    }


    function setProvincia($pProvincia){
       $this->provincia = $pProvincia;
    }
    function getProvincia(){
       return $this->provincia;
    }


    function setPassword($pPassword){
       $this->password = $pPassword;
    }
    function getPassword(){
       return $this->password;
    }

}

 ?>
