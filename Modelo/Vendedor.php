<?php
class Vendedor{
	protected $codigoV=0;
	protected $telefono=000000000;
	protected $nombre="";
	protected $fechaIngreso="";
  protected $ciudad="";
  protected $calle="";
  protected $cp=0;
  protected $localidad="";
  protected $provincia=0;
  protected $password="";

  function setCodigoV($pCodigoV){
     $this->codigoV = $pCodigoV;
  }
  function getCodigoV(){
     return $this->codigoV;
  }


  function setTelefono($pTelefono){
     $this->telefono = $pTelefono;
  }
  function getTelefono(){
     return $this->telefono;
  }


  function setNombre($pNombre){
     $this->nombre = $pNombre;
  }
  function getNombre(){
     return $this->nombre;
  }


    function setFechaIngreso($pFechaIngreso){
       $this->fechaIngreso = $pFechaIngreso;
    }
    function getFechaIngreso(){
       return $this->fechaIngreso;
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
