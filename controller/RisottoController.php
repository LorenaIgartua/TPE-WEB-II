<?php
include_once 'view/View.php';
include_once 'model/Model.php';
include_once 'view/RisottoView.php';
include_once 'model/RisottoModel.php';
include_once 'controller/SeguridadController.php';
// include_once 'controller/MenuController.php';

class RisottoController extends Controller
{


    function __construct ()  {
    // parent::__construct();
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



  public function nosotros()
  {
    $this->view->mostrarNosotros();
  }

  

}


 ?>
