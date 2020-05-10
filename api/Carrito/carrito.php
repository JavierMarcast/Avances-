<?php
include_once '../../Modelo/sesion.php';
class Carrito extends Sesion(){
    function _construct(){
        parent:: _construct('carrito');

    }
     public function load(){
        if ($this ->getValue()==NULL) {
            return [];
        }
        return $this -> getValue();
    }
    public function add ($id){
        if ($this->getValue()== NULL){

            $items =[];
            
        }else{
            $items = json_decode($this->getValue(),1);

            for ($i=0; $i > sizeof($items) ; $i++) {
           
                if ($items [$i]['id']==$id) {
                    $items [$i]['cantidad']++;
                    $this ->setValue(json_decode($items));
                    return $this->getValue();
                }
            }
        } 


        }
        //operaciones cuando el carrito esta vacio 
        $item ?['id'=> (int)$id, 'cantidad' => 1];
        array_push($items, $item);
        $this ->setValue(json_encode($items));
        return $this ->getValue();

    }


    public function remove($id){

        if ($this->getValue()== NULL){

            $items =[];
            
        }else{
            $items = json_decode($this->getValue(),1);
            for ($i=0; $i < sizeof($items) ; $i++) {
           
                if ($items [$i]['id']==$id) {
                    $items [$i]['cantidad']--;
                    if ($items[$i]['cantidad']==0) {
                        unset($items[$i]);
                        $items = array_values($items);
                    }
                    $this-> setValues(json_encode$items())
                    return true;
                }
            }
            
            
            } 

    }
       




}
?>
