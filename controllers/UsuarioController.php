<?php
namespace controllers;
use services\UsuarioService;
use controllers\ErrorController;

class UsuarioController {
  private UsuarioService $service;

  function __construct() {
    $this -> service = new UsuarioService();
  }

  public function iniciar_sesion() {
    require_once 'views/usuario/iniciar_sesion.php';
  }

  public function login() {
    session_start();
    if (!isset($_SESSION['correo']) || (!isset($_SESSION['password']))) {
      $_SESSION['correo'] = $_POST["correo"];
      $_SESSION['password'] = $_POST["password"];
    };

    $usuario = $this -> service -> inicia_sesion($_SESSION['correo'], $_SESSION['password']);
    if ($usuario) {
      $_SESSION['rol'] = $usuario -> getRol();
      $_SESSION['nombre'] = $usuario -> getNombre();
      require_once 'views/topbar.php';
      require_once 'views/navlist/navlist.php';
    }
    else {
      header("Location:".base_url);
    }
  }

  public function logout() {
    session_start();
    $_SESSION = array();
    session_destroy();

    header("Location:".base_url);
  }

  public function opciones_usuario() {
    if (session_status() != 2) { //Si la sesión no está iniciada
      session_start();  
    }
    require_once 'views/topbar.php';
    require_once 'views/navlist/navlist_usuario.php';
  }

  // AQUÍ VA EL CORTE

  public function datos_usuario() {
    $correo_usuario = $_SESSION['correo'];
    return $this -> service -> datos_usuario($correo_usuario);
  }

  public function extraer_todos() {
    require_once 'views/volver_inicio.php';
    return $this -> service -> listar();
  }

  public function listar() {
    $usuarios = $this -> extraer_todos();
    require_once 'views/volver_inicio.php';
    require_once 'views/usuario/listar.php';
    return $usuarios;
  }

  public function modificar() {
    var_dump($_POST);
    echo "VAMOS POR AQUÍ, LUEGO SEGUIMOS";
  }

  public function registro() {
    // Rescribirla
    //  si es admin : $_POST["esAdmin"]= "1" sino: -> $_POST["esAdmin"] = "0" lo pasamos a entero
    $usuario = array(
      'dni' => $_POST['dni'],
      'nombre' => $_POST['nombre'],
      'apellidos' => $_POST['apellidos'],
      'correo' => $_POST['correo'],
      'password' => $_POST['password'],
      'esAdmin' => (int) $_POST['esAdmin']
    );
    $this -> service -> guardar($usuario);

    header("Location:".base_url."/Usuario/login");
  }

  public function borrar() {
    $dni_usuario = $_POST['dni'];
    $this -> service -> borrar($dni_usuario);

    header("Location:".base_url."/Usuario/ver_opciones_borrado");
  }

  public function consultar_datos() {
    if (session_status() != 2) { //Si la sesión no está iniciada
      session_start();  
    }
    
    require_once 'views/volver_inicio.php';
    $usuario = $this -> datos_usuario();
    require_once 'views/usuario/consultar_datos.php';
  }

  public function ver_opciones_borrado() {
    require_once 'views/volver_inicio.php';
    $usuarios = $this -> listar();
    require_once 'views/Usuario/borrar.php';
  }

  public function ver_opciones_modificar() {
    $usuarios = $this -> listar();
    require_once 'views/volver_inicio.php';
    require_once 'views/usuario/elegir_usuario_campos_modificar.php';
  }

  public function ver_formulario_modificar() {
    $dni = $_POST['dni'];
    $opciones = array('nombre', 'apellidos', 'correo', 'password');

    foreach ($opciones as $opcion) {
      if (isset($_POST[$opcion])) {
        $opciones_procesar[] = $_POST[$opcion];
      }
    }

    require_once 'views/volver_inicio.php';
    $this -> consultar_datos();
    require_once 'views/usuario/modificar.php';
  }

  public function ver_formulario_elegir_datos_modificar() {
    if (session_status() != 2) { //Si la sesión no está iniciada
      session_start();  
    }

    $usuario = $this -> datos_usuario();
    $dni = $usuario -> getDni();

    require_once 'views/volver_inicio.php';
    $this -> consultar_datos();
    require_once 'views/usuario/elegir_datos_modificar.php';
  }
}
