<?php

class SeguridadController extends Controller
{

  function __construct()
  {
    session_start();
    if(isset($_SESSION['USER'])){
      // echo $_SESSION['USER'];
      if (time() - $_SESSION['LAST_ACTIVITY'] > 5) {
        header('Location: '.CERRARSESION);
        die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
        //  header('Location: '.MENUADMIN);
      //  echo $_SESSION['LAST_ACTIVITY']."holaaaaa";
    }
    else {
      //  header('Location: '.HOME);
      header('Location: '.INICIOSESION);
      die();
    }
  }
}

 ?>
