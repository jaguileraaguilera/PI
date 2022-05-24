<?php
namespace controllers;
use services\PlantacionService;
use controllers\UsuarioController;
use controllers\ErrorController;

class PlantacionController {
  private PlantacionService $service;

  function __construct() {
    $this -> service = new PlantacionService();
  }

  public function opciones_plantacion() {
    require_once 'views/topbar.php';
    require_once 'views/navlist/navlist_plantacion.php';
  }

  public function extraer_todas() {
    return $this -> service -> listar();
  }

  public function listar() {
    $array_objetos = $this -> extraer_todas();
    require_once 'views/plantacion/ver_todas.php';
    return $array_objetos;
  }

  public function ver_form_modificar() {
    $usuarioController = new UsuarioController();
    $usuarios = $usuarioController -> extraer_todos();
    $objeto = $this -> service -> datos_plantacion_id((int) $_POST['id_plantacion']);
    require_once 'views/plantacion/modificar.php';
    return $objeto;
  }

  public function borrar() {
    $this -> service -> borrar($_POST['id_plantacion']);
    header("Location:".base_url."/Plantacion/listar");
  }

  public function mis_plantaciones() {
    session_start();
    if (isset($_SESSION['correo'])) {
      $array_objetos = $this -> service -> datos_plantacion($_SESSION['correo']);
      require_once 'views/plantacion/mis_plantaciones.php';
      return $array_objetos;
    }
  }

  public function nueva() {
    session_start();
    if (isset($_SESSION['correo'])) {
      $usuarioController = new UsuarioController();
      $usuarios = $usuarioController -> extraer_todos();
      $array_objetos = $this -> service -> listar();
      $objeto = $array_objetos[0];
      require_once 'views/plantacion/alta.php';
      return $objeto;
    }
  }

  public function alta() {
    echo "POR AQUÍ VA EL CORTE";
    var_dump($_POST);

    // la zona  la pasa como string con los valores ['1', '2', '3']

    // EL ACTUAL SE DEFINE A 1 EN EL REPOSITORIO
  }

}