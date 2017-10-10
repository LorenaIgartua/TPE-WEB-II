<?php


class MenuView extends View
{
  function mostrarMenu ($tipo,$menu){
      $this->smarty->assign('tipo', $tipo);
      $this->smarty->assign('menu', $menu);
      // $this->smarty->assign('plato', $plato);
        $this->smarty->display('templates/menuAdmin.tpl');
  }

  function mostrarMenuAdmin ($tipo,$menu,$plato, $error = ''){
      $this->smarty->assign('tipo', $tipo);
      $this->smarty->assign('menu', $menu);
      $this->smarty->assign('plato', $plato);
      $this->smarty->assign('error', $error);
      $this->smarty->display('templates/menuAdmin.tpl');
  }

function formularioModificar($plato){
   $this->smarty->assign('plato', $plato);
   return  $this->smarty->display('templates/formularioModificar.tpl');
}


}

 ?>
