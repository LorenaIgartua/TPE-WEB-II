<?php
include_once('model/LoginModel.php');
include_once('view/LoginView.php');
// include_once 'controller/MenuController.php';

class LoginController extends Controller
{

// private $menu;
  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new LoginModel();
    // $this->menu = new MenuController();
  }

  public function iniciarSesion ()
  {
    $this->view->mostrarLogin();
  }

  public function verificarUsuario()
  {
      $userName = $_POST['usuario'];
      $password = $_POST['password'];
  // echo $userName;
  //     print_r ($this->model->getUser($userName));

       if(!empty($userName) && !empty($password)){
        $user = $this->model->getUser($userName);
        if((!empty($user)) && password_verify($password, $user[0]['Password'])) {
            session_start();
            $_SESSION['USER'] = $userName;
            echo $userName;
            $_SESSION['LAST_ACTIVITY'] = time();
              // $this->menu->menu();
            header('Location: '.MENUADMIN);
        }
        else{
            $this->view->mostrarLogin('Usuario o Password incorrectos');
        }
      }
  }

  public function cerrarSesion()
  {
    session_start();
    session_destroy();
    header('Location: '.HOME);
  }
}

 ?>
