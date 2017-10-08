<?php


class MenuView extends View
{
  function mostrarMenu ($tipo,$menu,$plato){
      $this->smarty->assign('tipo', $tipo);
      $this->smarty->assign('menu', $menu);
      $this->smarty->assign('plato', $plato);
        $this->smarty->display('templates/menu.tpl');
  }

  function mostrarMenuUsuario ($tipo,$menu,$plato){
      $this->smarty->assign('tipo', $tipo);
      $this->smarty->assign('menu', $menu);
      $this->smarty->assign('plato', $plato);
        $this->smarty->display('templates/menuUsuario.tpl');
  }




function formularioModificar($plato){
   $this->smarty->assign('plato', $plato);
   return  $this->smarty->display('templates/formularioModificar.tpl');
}


}

 ?>
