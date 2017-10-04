<?php
include_once 'view/View.php';
include_once 'model/Model.php';
include_once 'view/RisottoView.php';
include_once 'model/RisottoModel.php';



class RisottoController extends Controller
{
  function __construct ()
  {
    $this->view = new RisottoView();
    $this->model = new RisottoModel();
  }

  public function index()
  {
    $this->view->mostrarIndex();
  }

  public function home()
  {
    $this->view->mostrarHome();
  }

  public function contacto()
  {
    $this->view->mostrarContacto();
  }

  public function menu()
  {
    $this->view->mostrarMenu();
  }

  public function nosotros()
  {
    $this->view->mostrarNosotros();
  }


}


 ?>
