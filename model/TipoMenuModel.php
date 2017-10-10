<?php

class TipoMenuModel extends Model
{

  function obtenerTipoMenu(){
                    $sentencia = $this->db->prepare( "Select * from tipo_menu");
             $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function eliminarMenu($id_menu){
            $sentencia = $this->db->prepare( "Delete from tipo_menu where id_menu = ?");
            $sentencia->execute([$id_menu]);
            return  $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }



}



 ?>
