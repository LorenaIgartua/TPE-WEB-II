<?php

class SeguridadController extends Controller
{

  function __construct()
  {
    session_start();
    if(isset($_SESSION['USER'])){
      // echo $_SESSION['USER'];
      if (time() - $_SESSION['LAST_ACTIVITY'] > 1000000) {
        header('Location: '.CERRARSESION);
        die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
         header('Location: '.MENU);
      // echo $_SESSION['LAST_ACTIVITY'];
    }
    else {
       header('Location: '.HOME);
      header('Location: '.INICIOSESION);
      die();
    }
  }
}

 ?>
