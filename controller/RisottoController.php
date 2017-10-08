<?php
include_once 'view/View.php';
include_once 'model/Model.php';
include_once 'view/RisottoView.php';
include_once 'model/RisottoModel.php';
include_once 'controller/MenuController.php';





class RisottoController extends Controller
{
    private $menuController;
    function __construct ()  {
    // parent::__construct();
    $this->view = new RisottoView();
    $this->model = new RisottoModel();
    // $this->menuController = new MenuController();
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
    $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : null;
    $palabra = isset($_POST['palabra']) ? $_POST['palabra'] : null;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : null;

    $tipo = $this->model->obtenerTipoMenu();
    $platos = $this->model->obtenerPlatos($id_menu, $palabra, $valor);

    $this->view->mostrarMenu($tipo, $platos,"");
  }

  public function modificar()

  {
    $id_plato = $_POST['id_plato'];

    $id_menu =  null;
    $palabra =  null;
    $valor =  null;

    $tipo = $this->model->obtenerTipoMenu();
    $platos = $this->model->obtenerPlatos($id_menu, $palabra, $valor);


    $plato = $this->model->obtenerPlato($id_plato);
    $this->view->mostrarMenu($tipo, $platos, $plato);
    // $this->view->mostrarMenu($tipo, $platos, $plato);

 //header('Location: '.MENU);
    // echo "<pre>";
    // print_r($_POST);
    // echo"</pre>";

  }

 //
 // public function modificar($params)
 // {
 //   // $id_menu =  null;
 //   // $palabra =  null;
 //   // $valor =  null;
 //   //
 //   // $tipo = $this->model->obtenerTipoMenu();
 //   // $platos = $this->model->obtenerPlatos($id_menu, $palabra, $valor);
 //   echo "<pre>";
 //   print_r($params);
 //   echo"</pre>";
 //
 //   $plato = $this->model->obtenerPlato($params['0']);
 //   $this->view->formularioModificar($plato);
 //   // $this->view->mostrarMenu($tipo, $platos, $plato);

//header('Location: '.MENU);
   // echo "<pre>";
   // print_r($_POST);
   // echo"</pre>";

 // }






  public function agregar()
  {
    $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : 1; // acomodar
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
    $valor = isset($_POST['valor']) ? $_POST['valor'] : "";
  // echo ("id_menu ".$id_menu." / "."palabra ".$palabra."/ "."valor ".$valor." / ");
    $tipo = $this->model->agregarPlato($id_menu, $nombre, $descripcion, $valor);

    //  $this->menu();

       header('Location: '.MENU);
    // $tipo = $this->model->obtenerTipoMenu();
    // $platos = $this->model->obtenerPlatos($id_menu, $palabra, $valor);
    // $this->view->mostrarMenu($tipo, $platos);
  }


  public function eliminar()
  {

    $id_plato = $_POST['id_plato'];

  $this->model->eliminarPlato($id_plato);
    header('Location: '.MENU);

  }



  public function nosotros()
  {
    $this->view->mostrarNosotros();
  }




}


 ?>
