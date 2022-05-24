<?php
namespace controllers;
use services\EntregaService;
use controllers\PlantacionController;
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
      $plantacionController = new PlantacionController();
      $plantaciones = $plantacionController -> extraer_todas();
      $array_objetos = $this -> service -> listar();
      $objeto = $array_objetos[0];
      require_once 'views/entrega/alta.php';
      return $objeto;
    }
  }

  public function borrar() {
    $this -> service -> borrar($_POST['id_entrega']);
    header("Location:".base_url."/Entrega/listar");
  }

  public function ver_form_modificar() {
    $plantacionController = new PlantacionController();
    $plantaciones = $plantacionController -> extraer_todas();
    $objeto = $this -> service -> datos_entrega($_POST['id_entrega']);
    require_once 'views/entrega/modificar.php';
    return $objeto;
  }

  public function modificar() {
    $id_entrega = (int) $_POST['id_entrega'];

    if (isset($_POST['tara']) && !empty($_POST['tara'])) {
      $tara = (float) filter_var( $_POST['tara'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    if (isset($_POST['bruto']) && !empty($_POST['bruto'])) {
      $bruto = (float) filter_var( $_POST['bruto'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    if (isset($_POST['id_plantacion']) && !empty($_POST['id_plantacion'])) {
      $id_plantacion = (int) filter_var($_POST['id_plantacion'], FILTER_SANITIZE_NUMBER_INT);
    }

    if (!is_null($tara) && !is_null($bruto) && !is_null($id_plantacion)) {
      $neto = $bruto - $tara;
      $fecha = $_POST['fecha'];
      $hora = $_POST['hora'];
      $parametros = array(
        'tara' => $tara,
        'bruto' => $bruto,
        'neto' => $neto,
        'fecha' => $fecha,
        'hora' => $hora,
        'id_plantacion' =>  $id_plantacion,
        'actual' => 1
      );

      $this -> service -> modificar($id_entrega, $parametros);
      header("Location:".base_url."/Entrega/listar");
    }
  }

  public function alta() {
    if (isset($_POST['tara']) && !empty($_POST['tara'])) {
      $tara = filter_var( $_POST['tara'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    if (isset($_POST['bruto']) && !empty($_POST['bruto'])) {
      $bruto = filter_var( $_POST['bruto'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    if (isset($_POST['id_plantacion']) && !empty($_POST['id_plantacion'])) {
      $id_plantacion = filter_var($_POST['id_plantacion'], FILTER_SANITIZE_NUMBER_INT);
    }

    if (!is_null($tara) && !is_null($bruto) && !is_null($id_plantacion)) {
      $neto = $bruto - $tara;
      $fecha = date("Y-m-d");
      $hora = date("H:i:s");
      $this -> service -> alta($tara, $bruto, $neto, $fecha, $hora, $id_plantacion);
      header("Location:".base_url."/Entrega/listar");
    }
  }
}