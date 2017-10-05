<?php
include_once('model/LoginModel.php');
include_once('view/LoginView.php');

class LoginController extends Controller
{

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new LoginModel();
  }

  public function login()
  {
    $this->view->mostrarLogin();
  }

  public function verificarUsuario()
  {
      $userName = $_POST['usuario'];
      $password = $_POST['password'];

      print_r ($this->model->getUser($userName));

       if(!empty($userName) && !empty($password)){
        $user = $this->model->getUser($userName);
        if((!empty($user)) && password_verify($password, $user[0]['Password'])) {
            session_start();
            $_SESSION['USER'] = $userName;
            $_SESSION['LAST_ACTIVITY'] = time();
            header('Location: '.HOME);
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
