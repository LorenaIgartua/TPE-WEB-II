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
      'iniciarSesion' =>  'LoginController#iniciarSesion',
      'verificarUsuario' =>  'LoginController#verificarUsuario',
      'cerrarSesion' => 'LoginController#cerrarSesion',
      'agregar' => 'MenuController#agregar',
      'eliminarPlato' => 'MenuController#eliminarPlato',
      'eliminarMenu' => 'MenuController#eliminarMenu',
      'modificarPlato' => 'MenuController#modificarPlato', /// este es el que carga el formulario
      'actualizar' => 'MenuController#actualizar'

  ];
}

 ?>
