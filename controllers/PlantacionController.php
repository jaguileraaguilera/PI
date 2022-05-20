<?php
namespace controllers;
use services\PlantacionService;
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

  public function listar() {
    $array_objetos = $this -> service -> listar();
    require_once 'views/plantacion/ver_todas.php';
    return $array_objetos;
  }

  public function ver_form_modificar() {
    $objeto = $this -> service -> datos_plantacion($_POST['id_plantacion']);
    require_once 'views/plantacion/modificar.php';
    return $objeto;
  }

}