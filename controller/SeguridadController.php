<?php

class SeguridadController extends Controller
{

  function __construct()
  {
    session_start();
    if(isset($_SESSION['USER'])){
      // echo $_SESSION['USER'];
      if (time() - $_SESSION['LAST_ACTIVITY'] > 100) {
        header('Location: '.LOGOUT);
        die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
      // header('Location: '.MENU);
      // echo $_SESSION['LAST_ACTIVITY'];
    }
    else {
      header('Location: '.INICIOSESION);
      die();
    }
  }
}

 ?>
