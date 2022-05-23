<?php
namespace controllers;
use services\EntregaService;
use controllers\ErrorController;

class EntregaController {
  private EntregaService $service;

  function __construct() {
    $this -> service = new EntregaService();
  }

  public function opciones_entrega() {
    if (session_status() != 2) { //Si la sesión no está iniciada
      session_start();  
    }
    require_once 'views/topbar.php';
    require_once 'views/navlist/navlist_entrega.php';
  }

  public function listar() {
    $array_objetos = $this -> service -> listar();
    require_once 'views/entrega/ver_todas.php';
    return $array_objetos;
  }

  public function mis_entregas() {
    session_start();
    if (isset($_SESSION['correo'])) {
      $array_objetos = $this -> service -> datos_entregas_correo($_SESSION['correo']);
      require_once 'views/entrega/mis_entregas.php';
      return $array_objetos;
    }
  }

  public function nueva() {
    session_start();
    if (isset($_SESSION['correo'])) {
      $array_objetos = $this -> service -> listar();
      $objeto = $array_objetos[0];
      require_once 'views/entrega/alta.php';
      return $objeto;
    }
  }

  public function alta() {
    echo "POR AQUÍ VA EL CORTE";
    var_dump($_POST);
    $fecha = date("Y-m-d");
    $hora = date("h:i:s");
    $neto = $_POST['bruto'] - $_POST['tara'];

    // EL ACTUAL SE DEFINE A 1 EN EL REPOSITORIO
  }

}