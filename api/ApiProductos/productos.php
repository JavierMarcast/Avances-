<?php
include_once '../../Modelo/conexion.php';
conexion::conectarAdministrador();
class productos extends Conexion{

  public function get($id){
    $query = $this->conectarAdministrador()->prepare('SELECT * FROM "PRODUCTO" WHERE id= :id ');
    $query->execute(['id'=>$id]);
    $row = $query->fetch();
    return [
      'id'        =>$row['Codigop'],
      'nombre'    =>$row['descripcion'],
      'precio'    =>$row['precio'],
      'categoria'  =>$row['categoria'],
      'imagen2'   =>$row['Nom_Img'],
    ];


  }
public function getitemsbycategory($categoria){
  $query = $this->conectarAdministrador()->prepare('SELECT * FROM "PRODUCTO" WHERE categoria= :categoria');
  $query->execute(['categoria'=>$categoria]);
$items =[];
  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
   $item =[
     'id'        =>$row['Codigop'],
     'nombre'    =>$row['descripcion'],
     'precio'    =>$row['precio'],
     'categoria'  =>$row['categoria'],
     'imagen2'   =>$row['Nom_Img'],
];
array_push($items,$item);
  }
return $items;

}
public function getitemsbycategory1(){
  $query = $this->conectarAdministrador()->prepare('SELECT * FROM "PRODUCTO"');

$items =[];
  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
   $item =[
     'id'        =>$row['Codigop'],
     'nombre'    =>$row['descripcion'],
     'precio'    =>$row['precio'],
     'categoria'  =>$row['categoria'],
     'imagen2'   =>$row['Nom_Img'],
];
array_push($items,$item);
  }
return $items;

}


}


 ?>
