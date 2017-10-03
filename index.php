<?php

include_once 'libs/Smarty.class.php';
include_once 'route.php';


function home () {
  $titulo = "RISOTERIA ITALIANA";
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
//  $smarty -> debugging = true;
  $smarty->display('templates/home.tpl');
}

function contacto () {
  $titulo = "RISOTERIA ITALIANA";
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
//  $smarty -> debugging = true;
  $smarty->display('templates/contacto.tpl');
}

function menu () {
  $titulo = "RISOTERIA ITALIANA";
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
//  $smarty -> debugging = true;
  $smarty->display('templates/menu.tpl');
}

function nosotros () {
  $titulo = "RISOTERIA ITALIANA";
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
//  $smarty -> debugging = true;
  $smarty->display('templates/nosotros.tpl');
}


/*function home () {
$smarty = new Smarty();
$smarty->assign('titulo',"RISOTERIA ITALIANA");
$smarty->display('templates/index.tpl');
}


function home () {
  $smarty = new Smarty();
  $smarty->assign('titulo',"RISOTERIA ITALIANA");
  $smarty->display('templates/home.tpl');
}

function contacto () {
  echo 'hola';
}

function nosotros () {
  echo 'nosotros';
}
*/


?>
