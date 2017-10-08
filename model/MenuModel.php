<?php

class MenuModel extends Model
{
  function obtenerMenu(){


        $sentencia = $this->db->prepare( "Select * from plato");
        // alert ($id_menu, $nombre, $descripcion, $valor);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function obtenertipo(){
        $sentencia = $this->db->prepare( "Select *  from tipo_menu");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  // function obtenerMenuFiltrado($id_menu, $nombre, $descripcion, $valor){
  //
  //
  //       $sentencia = $this->db->prepare( "Select * from plato where id_menu= ? and nombre like ? and descripcion like ? and valor = ?");
  //       // alert ($id_menu, $nombre, $descripcion, $valor);
  //       $sentencia->execute($id_menu, $nombre, $descripcion, $valor);
  //       return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  // }
}

 ?>
