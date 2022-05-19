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
}