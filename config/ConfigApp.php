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
      'contacto' =>  'RisottoController#contacto',
      'login' =>  'LoginController#login', //iniciarSesion
      'verificarUsuario' =>  'LoginController#verificarUsuario',
      'logout' => 'LoginController#cerrarSesion', // cerrarSesion
      'agregar' => 'RisottoController#agregar',
      'eliminar' => 'RisottoController#eliminar',
      'modificar' => 'RisottoController#modificar', /// este es el que carga el formulario
      'actualizar' => 'RisottoController#actualizar'

  ];
}

 ?>
