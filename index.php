<?php

include_once 'libs/Smarty.class.php';

include_once 'route.php';

function home () {
  echo 'hola';
}

function hola () {
  $smarty = new Smarty();
  $smarty->assign('titulo',"RISOTERIA ITALIANA");
  $smarty->display('templates/home.tpl');
}

function contacto () {
  $smarty = new Smarty();
  $smarty->assign('titulo',"RISOTERIA ITALIANA");
  $smarty->display('templates/contacto.tpl');
}

function nosotros () {
  echo 'nosotros';
}



?>
