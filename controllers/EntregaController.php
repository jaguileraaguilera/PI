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
}