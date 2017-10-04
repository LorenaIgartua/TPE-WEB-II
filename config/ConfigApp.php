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

  ];
}

 ?>
