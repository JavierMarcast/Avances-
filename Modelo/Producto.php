<?php
class Producto{
  protected $codigoP=0;
  protected $precio=0.0;
  protected $existencia=0;
  protected $descripcion="";
  protected $categoria=0;

  function setCodigoP($pCodigoP){
     $this->codigoP = $pCodigoP;
  }
  function getCodigoP(){
     return $this->codigoP;
  }

  function setPrecio($pPrecio){
     $this->precio = $pPrecio;
  }
  function getPrecio(){
     return $this->precio;
  }

  function setExistencia($pExistencia){
     $this->existencia = $pExistencia;
  }
  function getExistencia(){
     return $this->existencia;
  }

  function setDescripcion($pDescripcion){
     $this->descripcion = $pDescripcion;
  }
  function getDescripcion(){
     return $this->descripcion;
  }

  function setCategoria($pCategoria){
     $this->categoria = $pCategoria;
  }
  function getCategoria(){
     return $this->categoria;
  }

}
 ?>
