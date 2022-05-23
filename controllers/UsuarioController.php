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

    $objeto = $this -> service -> inicia_sesion($_SESSION['correo'], $_SESSION['password']);
    if ($objeto) {
      $_SESSION['rol'] = $objeto -> getRol();
      $_SESSION['nombre'] = $objeto -> getNombre();
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
    require_once 'views/topbar.php';
    require_once 'views/navlist/navlist_usuario.php';
  }

  public function listar() {
    $array_objetos = $this -> service -> listar();
    require_once 'views/usuario/ver_todos.php';
    return $array_objetos;
  }

  public function ver_form_modificar() {
    $objeto = $this -> service -> datos_usuario($_POST['id_usuario']);
    require_once 'views/usuario/modificar.php';
    return $objeto;
  }

  public function mis_datos() {
    session_start();
    if (isset($_SESSION['correo'])) {
      $objeto = $this -> service -> datos_usuario_correo($_SESSION['correo']);
      require_once 'views/usuario/mis_datos.php';
      return $objeto;
    }
  }

  public function nuevo() {
    session_start();
    if (isset($_SESSION['correo'])) {
      $objeto = $this -> service -> datos_usuario_correo($_SESSION['correo']);
      require_once 'views/usuario/alta.php';
      return $objeto;
    }
  }

  public function borrar() {
    $this -> service -> borrar($_POST['id_usuario']);
    header("Location:".base_url."/Usuario/listar");
  }

  // AQUÍ VA EL CORTE

  // public function datos_usuario() {
  //   $correo_usuario = $_SESSION['correo'];
  //   return $this -> service -> datos_usuario($correo_usuario);
  // }

  // public function registro() {
  //   // Rescribirla
  //   //  si es admin : $_POST["esAdmin"]= "1" sino: -> $_POST["esAdmin"] = "0" lo pasamos a entero
  //   $objeto = array(
  //     'dni' => $_POST['dni'],
  //     'nombre' => $_POST['nombre'],
  //     'apellidos' => $_POST['apellidos'],
  //     'correo' => $_POST['correo'],
  //     'password' => $_POST['password'],
  //     'esAdmin' => (int) $_POST['esAdmin']
  //   );
  //   $this -> service -> guardar($objeto);

  //   header("Location:".base_url."/Usuario/login");
  // }

  // public function borrar() {
  //   $dni_usuario = $_POST['dni'];
  //   $this -> service -> borrar($dni_usuario);

  //   header("Location:".base_url."/Usuario/ver_opciones_borrado");
  // }

  // public function consultar_datos() {
  //   if (session_status() != 2) { //Si la sesión no está iniciada
  //     session_start();  
  //   }
    
  //   require_once 'views/volver_inicio.php';
  //   $objeto = $this -> datos_usuario();
  //   require_once 'views/usuario/consultar_datos.php';
  // }

  // public function ver_opciones_borrado() {
  //   require_once 'views/volver_inicio.php';
  //   $objetos = $this -> listar();
  //   require_once 'views/Usuario/borrar.php';
  // }

  // public function ver_opciones_modificar() {
  //   $objetos = $this -> listar();
  //   require_once 'views/volver_inicio.php';
  //   require_once 'views/usuario/elegir_usuario_campos_modificar.php';
  // }

  // public function ver_formulario_modificar() {
  //   $dni = $_POST['dni'];
  //   $opciones = array('nombre', 'apellidos', 'correo', 'password');

  //   foreach ($opciones as $opcion) {
  //     if (isset($_POST[$opcion])) {
  //       $opciones_procesar[] = $_POST[$opcion];
  //     }
  //   }

  //   require_once 'views/volver_inicio.php';
  //   $this -> consultar_datos();
  //   require_once 'views/usuario/modificar.php';
  // }

  // public function ver_formulario_elegir_datos_modificar() {
  //   if (session_status() != 2) { //Si la sesión no está iniciada
  //     session_start();  
  //   }

  //   $objeto = $this -> datos_usuario();
  //   $dni = $objeto -> getDni();

  //   require_once 'views/volver_inicio.php';
  //   $this -> consultar_datos();
  //   require_once 'views/usuario/elegir_datos_modificar.php';
  // }
}
