<?php

class MenuModel extends Model
{

  function obtenerTipoMenu(){
                    $sentencia = $this->db->prepare( "Select * from tipo_menu");
             $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function obtenerPlatos($id_menu, $palabra, $valor){
          $prepare = "Select *  from plato where 1=1";
          if (isset($id_menu) && ($id_menu!=""))
              $prepare = $prepare." and id_menu = ".$id_menu;
          if (isset($palabra) && ($palabra!=""))
              $prepare = $prepare." and (nombre like '%".$palabra."%' or descripcion like '%".$palabra."%' ) ";
          $sentencia = $this->db->prepare( $prepare);
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

  function agregarPlato($id_menu, $nombre, $descripcion,$valor){
        $sentencia = $this->db->prepare( "INSERT INTO plato (id_menu, nombre, descripcion, valor) VALUES (?,?,?,?)");
        $sentencia->execute([$id_menu, $nombre, $descripcion, $valor]);
      }

function actualizarPlato($id_menu, $nombre, $descripcion, $valor, $id_plato){
        $sentencia = $this->db->prepare( "UPDATE `plato` SET `id_menu` = ?, `nombre` = ?, `descripcion` = ?, `valor` = ? WHERE `plato`.`id_plato` = ?");
        $sentencia->execute([$id_menu, $nombre, $descripcion, $valor, $id_plato]);
}

function eliminarPlato($id_plato){
        $sentencia = $this->db->prepare( "DELETE FROM plato where id_plato = ?");
        $sentencia->execute([$id_plato]);
}

function obtenerPlato($id_plato){
          $sentencia = $this->db->prepare( "Select * from plato where id_plato = ?");
          $sentencia->execute([$id_plato]);
          return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}








}



 ?>
