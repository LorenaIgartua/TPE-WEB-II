<?php

class RisottoModel extends Model
{
  function obtenerMenu(){
                    $sentencia = $this->db->prepare( "Select
t.id_menu as 'menu_id_menu',
t.nombre as 'menu_nombre',
p.id_plato as 'plato_id_plato',
p.nombre as 'plato_nombre',
p.descripcion as 'plato_descripcion',
p.valor as 'plato_valor'
from
tipo_menu t,
plato p
where
t.id_menu = p.id_menu
");
             $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function obtenertipo(){
                    $sentencia = $this->db->prepare( "Select id_menu as 'tipo_id_menu',
                      nombre as 'tipo_nombre'
                      from
                      tipo_menu");
                      $sentencia->execute();
                      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
}

 ?>
