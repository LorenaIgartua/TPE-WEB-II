<?php
include_once 'view/View.php';
include_once 'model/Model.php';
include_once 'view/RisottoView.php';
include_once 'model/RisottoModel.php';
include_once 'controller/SeguridadController.php';
include_once 'controller/MenuController.php';

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

  public function menu()
  {
    $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : null;
    $palabra = isset($_POST['palabra']) ? $_POST['palabra'] : null;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : null;
    $tipo = $this->model->obtenerTipoMenu();
    $platos = $this->model->obtenerPlatos($id_menu, $palabra, $valor);
    $this->view->mostrarMenu($tipo, $platos,"");

    }
  }





 ?>
