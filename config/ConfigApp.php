<?php

class ConfigApp
{
  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
      '' =>  'RisottoController#index',
      'home' =>  'RisottoController#home',
      'nosotros' =>  'RisottoController#nosotros',
      'menu' =>  'RisottoController#menu',
      'menuAdmin' =>  'MenuController#menuAdmin',
      'contacto' =>  'RisottoController#contacto',
      'iniciarSesion' =>  'LoginController#iniciarSesion', //iniciarSesion
      'verificarUsuario' =>  'LoginController#verificarUsuario',
      'cerrarSesion' => 'LoginController#cerrarSesion', // cerrarSesion
      'agregar' => 'MenuController#agregar',
      'eliminar' => 'MenuController#eliminar',
      'modificar' => 'MenuController#modificar', /// este es el que carga el formulario
      'actualizar' => 'MenuController#actualizar'

  ];
}

 ?>
