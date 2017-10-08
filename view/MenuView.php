<?php


class MenuView extends View
{
  function mostrarMenu ($tipo,$menu){
      $this->smarty->assign('tipo', $tipo);
      $this->smarty->assign('menu', $menu);
        $this->smarty->display('templates/menu.tpl');
  }

}

 ?>
