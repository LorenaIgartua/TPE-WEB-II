<?php

class RisottoModel extends Model
{
  function obtenerTipoMenu(){
          $sentencia = $this->db->prepare( "Select * from tipo_menu");
          $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function obtenerPlatos($id_menu, $palabra, $valor){  /// borrar
        $prepare = "Select *  from plato where 1=1";
        if (isset($id_menu) && ($id_menu!=""))
            $prepare = $prepare." and id_menu = ".$id_menu;
        if (isset($palabra) && ($palabra!=""))
            $prepare = $prepare." and (nombre like '%".$palabra."%' or descripcion like '%".$palabra."%' ) ";
        $sentencia = $this->db->prepare( $prepare);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }


}

 ?>
