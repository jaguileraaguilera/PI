<?php
namespace controllers;
use lib\Paginador;
use services\PlantacionService;
use models\Plantacion;
use controllers\UsuarioController;
use controllers\ErrorController;

/**
 * PlantacionController
 */
class PlantacionController {
  private PlantacionService $service;
  
  /**
   * __construct
   *
   * @return void
   */
  function __construct() {
    $this -> service = new PlantacionService();
  }
  
  /**
   * opciones_plantacion
   *
   * @return void
   */
  public function opciones_plantacion(): void {
    require_once 'views/topbar.php';
    require_once 'views/navlist/navlist_plantacion.php';
  }
  
  /**
   * extraer_todas
   *
   * @return array
   */
  public function extraer_todas(): array {
    return $this -> service -> listar();
  }
    
  /**
   * listar
   *
   * @return void
   */
  public function listar(): void {
    if (isset($_GET['pagina'])){
      $pagina = (int) $_GET['pagina'];
    }
    else {
      $pagina = 1;
    }
    $paginador = new Paginador($this -> service -> listar(), 15);
    $array_objetos = $paginador -> particiones;
    require_once 'views/plantacion/ver_todas.php';
  }
  
  /**
   * datos_plantacion
   *
   * @param  mixed $id_plantacion
   * @return Plantacion
   */
  public function datos_plantacion($id_plantacion) : Plantacion {
    return $this -> service -> datos_plantacion_id($id_plantacion);
  }
  
  /**
   * ver_form_modificar
   *
   * @return void
   */
  public function ver_form_modificar() {
    $usuarioController = new UsuarioController();
    $usuarios = $usuarioController -> extraer_todos();
    $objeto = $this -> service -> datos_plantacion_id((int) $_POST['id_plantacion']);
    require_once 'views/plantacion/modificar.php';
    return $objeto;
  }
  
  /**
   * borrar
   *
   * @return void
   */
  public function borrar(): void {
    $this -> service -> borrar($_POST['id_plantacion']);
    header("Location:".base_url."/Plantacion/listar");
  }
  
  /**
   * mis_plantaciones
   *
   * @return array
   */
  public function mis_plantaciones(): array {
    session_start();
    if (isset($_SESSION['correo'])) {
      $pagina = (int) $_GET['pagina'];
      $paginador = new Paginador($this -> service -> datos_plantaciones($_SESSION['correo']), 15);
      $array_objetos = $paginador -> particiones;
      require_once 'views/plantacion/mis_plantaciones.php';
      return $array_objetos;
    }
  }
    
  /**
   * ver_form_alta
   *
   * @return void
   */
  public function ver_form_alta(): void {
    session_start();
    if (isset($_SESSION['correo'])) {
      $usuarioController = new UsuarioController();
      $usuarios = $usuarioController -> extraer_todos();
      $array_objetos = $this -> service -> listar();
      $objeto = $array_objetos[0];
      require_once 'views/plantacion/alta.php';
    }
  }
  
  /**
   * modificar
   *
   * @return void
   */
  public function modificar() {
    $id_plantacion = (int) $_POST['id_plantacion'];

    if (isset($_POST['anio']) && !empty($_POST['anio'])) {
      $anio = (int) filter_var( $_POST['anio'], FILTER_SANITIZE_NUMBER_INT);
    }

    if (isset($_POST['zona']) && !empty($_POST['zona'])) {
      $zona = (int) filter_var($_POST['zona'], FILTER_SANITIZE_NUMBER_INT);
    }

    if (isset($_POST['id_usuario']) && !empty($_POST['id_usuario'])) {
      $id_usuario = (int) filter_var($_POST['id_usuario'], FILTER_SANITIZE_NUMBER_INT);
    }

    if (isset($_POST['variedad']) && !empty($_POST['variedad'])) {
      $variedad = filter_var($_POST['variedad'], FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if (!is_null($anio) && !is_null($zona) && !is_null($id_usuario)) {
      $parametros = array(
        'variedad' => $variedad,
        'anio' => $anio,
        'zona' => $zona,
        'id_usuario' => $id_usuario
      );

      $this -> service -> modificar($id_plantacion, $parametros);
      header("Location:".base_url."/Plantacion/listar");
    }
  }

  public function alta() {
    if (isset($_POST['anio']) && !empty($_POST['anio'])) {
      $anio = (int) filter_var( $_POST['anio'], FILTER_SANITIZE_NUMBER_INT);
    }

    if (isset($_POST['zona']) && !empty($_POST['zona'])) {
      $zona = (int) filter_var($_POST['zona'], FILTER_SANITIZE_NUMBER_INT);
    }

    if (isset($_POST['id_usuario']) && !empty($_POST['id_usuario'])) {
      $id_usuario = (int) filter_var($_POST['id_usuario'], FILTER_SANITIZE_NUMBER_INT);
    }

    if (isset($_POST['variedad']) && !empty($_POST['variedad'])) {
      $variedad = filter_var($_POST['variedad'], FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if (!is_null($anio) && !is_null($zona) && !is_null($id_usuario)) {
      $this -> service -> alta($variedad, $anio, $zona, $id_usuario);
      header("Location:".base_url."/Plantacion/listar");
    }
  }

}