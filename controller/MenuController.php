<?php
include_once 'view/MenuView.php';
include_once 'model/MenuModel.php';
// include_once 'controller/SeguridadController.php';

// echo "<pre>";
// print_r ($menu);
// echo"</pre>";

class MenuController extends Controller
{

    //  private $seguridadController;

    function __construct ()  {
    // parent::__construct();
    $this->view = new MenuView();
    $this->model = new MenuModel();
    // $this->seguridadController = new SeguridadController();
  }

  public function menu()
  {
    $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : null;
    $palabra = isset($_POST['palabra']) ? $_POST['palabra'] : null;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : null;

    $tipo = $this->model->obtenerTipoMenu();
    $platos = $this->model->obtenerPlatos($id_menu, $palabra, $valor);
// print_r ($_SESSION['USER']);
    // if (!isset($_SESSION['USER']))
    // $this->view->mostrarMenuUsuario($tipo, $platos,"");
    // else
    $this->view->mostrarMenu($tipo, $platos,"");

    // $this->view->mostrarMenu($tipo, $platos,"");
  }


  // public function menu($id_menu, $nombre, $descripcion, $valor)
  // {
  //   $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : null;
  //   $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
  //   $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : null;
  //   $valor = isset($_POST['valor']) ? $_POST['valor'] : null;
  //   $tipo = $this->model->obtenertipo();
  //   $menu = $this->model->obtenerMenu($id_menu, $nombre, $descripcion, $valor);
  //   $this->view->mostrarMenu($tipo,$menu);
  // }

  public function modificar ()
  {
    $id_plato = $_POST['id_plato'];
    $id_menu =  null;
    $palabra =  null;
    $valor =  null;
    echo ("llegue");
    $tipo = $this->model->obtenerTipoMenu();
    $platos = $this->model->obtenerPlatos($id_menu, $palabra, $valor);
    $plato = $this->model->obtenerPlato($id_plato);

    // echo "<pre>";
    // print_r ($tipo);
    // echo"</pre>";
    //
    // echo "<pre>";
    // print_r ($platos);
    // echo"</pre>";
    //
    // echo "<pre>";
    // print_r ($plato);
    // echo"</pre>";
     $this->view->mostrarMenu($tipo, $platos, $plato);
  }

  public function agregar ()
  {

    // echo("llegue");
    $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : 1; // acomodar
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
    $valor = isset($_POST['valor']) ? $_POST['valor'] : "";
    $tipo = $this->model->agregarPlato($id_menu, $nombre, $descripcion, $valor);
    header('Location: '.MENU);
  }

  public function eliminar ()
  {
    $id_plato = $_POST['id_plato'];
    $this->model->eliminarPlato($id_plato);
    header('Location: '.MENU);
  }


  public function actualizar ()
  {
    $id_plato = isset($_POST['id_plato']) ? $_POST['id_plato'] : "";
    $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : 1; // acomodar
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
    $valor = isset($_POST['valor']) ? $_POST['valor'] : "";
    // echo($id_plato. $id_menu. $nombre.$descripcion.$valor);
     $tipo = $this->model->actualizarPlato($id_menu, $nombre, $descripcion, $valor, $id_plato);
     header('Location: '.MENU);
  }




}


 ?>
