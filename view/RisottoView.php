<?php


class RisottoView extends View
{
  function mostrarIndex (){
    return  $this->smarty->display('templates/index.tpl');
  }

  function mostrarHome (){
    return  $this->smarty->display('templates/home.tpl');
  }

  function mostrarContacto (){
    return  $this->smarty->display('templates/contacto.tpl');
  }

  function mostrarNosotros (){
    return  $this->smarty->display('templates/nosotros.tpl');
  }

  function mostrarMenu ($tipo,$menu){
    $this->smarty->assign('tipo', $tipo);
    $this->smarty->assign('menu', $menu);
    // $this->smarty->assign('plato', $plato);
    $this->smarty->display('templates/menuUsuario.tpl');
  }

}

 ?>
