<?php


class MenuView extends View
{
  function mostrarMenu ($tipo,$menu){
      $this->smarty->assign('tipo', $tipo);
      $this->smarty->assign('menu', $menu);
        $this->smarty->display('templates/menu.tpl');
  }




function formularioModificar($plato){
   $this->smarty->assign('plato', $plato);
   return  $this->smarty->display('templates/formularioModificar.tpl');
}


}

 ?>
