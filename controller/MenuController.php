<?php
// include_once 'view/View.php';
// include_once 'model/Model.php';
// include_once 'view/RisottoView.php';
// include_once 'model/RisottoModel.php';

include_once 'view/MenuView.php';
include_once 'model/MenuModel.php';

class MenuController extends Controller
{
    function __construct ()  {
    // parent::__construct();
    $this->view = new MenuView();
    $this->model = new MenuModel();
  }

  public function menu($id_menu, $nombre, $descripcion, $valor)
  {
    $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : null;
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : null;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : null;

    // $todo = array ($id_menu, $nombre, $descripcion, $valor);
    // print_r($todo);
    $tipo = $this->model->obtenertipo();
    $menu = $this->model->obtenerMenu($id_menu, $nombre, $descripcion, $valor);

    // echo "<pre>";
    // print_r ($tipo);
    // echo"</pre>";
    // echo "<pre>";
    // print_r ($menu);
    // echo"</pre>";
    $this->view->mostrarMenu($tipo,$menu);
  }

  public function menu2()
  {
    $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : null;
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : null;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : null;

    $todo = array ($id_menu, $nombre, $descripcion, $valor);
    print_r($todo);
    // this->menu($id_menu, $nombre, $descripcion, $valor);
    // $tipo = $this->model->obtenertipo();
    // $menu = $this->model->obtenerMenu($id_menu, $nombre, $descripcion, $valor);
    // $this->view->mostrarMenu($tipo,$menu);
    $this->menuController->obtenerMenuFiltrado($id_menu, $nombre, $descripcion, $valor);
    // echo $nombre ;

    // $id_menu, $nombre, $descripcion, $valor
    // $tipo = $this->model->obtenertipo();
    // $menu = $this->model->obtenerMenu($id_menu, $nombre, $descripcion, $valor);

    // echo "<pre>";
    // print_r ($tipo);
    // echo"</pre>";
    // echo "<pre>";
    // print_r ($menu);
    // echo"</pre>";
    // $this->view->mostrarMenu($tipo,$menu);
  }

  // public function nosotros()
  // {
  //   $this->view->mostrarNosotros();
  // }




}


 ?>
