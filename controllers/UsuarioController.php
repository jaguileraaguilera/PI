<?php
namespace controllers;
use services\UsuarioService;
use lib\Paginador;
use models\Usuario;
use controllers\ErrorController;

class UsuarioController {
  private UsuarioService $service;

  function __construct() {
    $this -> service = new UsuarioService();
  }
  
  /**
   * login
   *
   * @return void
   */
  public function login(): void {
    session_start();
    if (!isset($_SESSION['correo']) || (!isset($_SESSION['password']))) {
      $_SESSION['correo'] = $_POST["correo"];
      $_SESSION['password'] = $_POST["password"];

      $usuarios = $this -> extraer_todos();
      $encontrado = false;
      $i = 0;

      while (!$encontrado) {
        if (password_verify($_SESSION['password'], $usuarios[$i] -> getPassword())) {
          $encontrado = true;
          $_SESSION['password_cifrada']= $usuarios[$i] -> getPassword();
        }
        else {
          $i++;
        }
      }
    }

    $objeto = $this -> service -> inicia_sesion($_SESSION['correo'], $_SESSION['password_cifrada']);
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
  
  /**
   * logout
   *
   * @return void
   */
  public function logout(): void {
    session_start();
    $_SESSION = array();
    session_destroy();

    header("Location:".base_url);
  }
  
  /**
   * opciones_usuario
   *
   * @return void
   */
  public function opciones_usuario(): void {
    require_once 'views/topbar.php';
    require_once 'views/navlist/navlist_usuario.php';
  }
  
  /**
   * extraer_todos
   *
   * @return array
   */
  public function extraer_todos(): array {
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
    require_once 'views/usuario/ver_todos.php';
  }
  
  /**
   * ver_form_modificar
   *
   * @return void
   */
  public function ver_form_modificar(): void {
    $objeto = $this -> service -> datos_usuario($_POST['id_usuario']);
    require_once 'views/usuario/modificar.php';
  }
  
  /**
   * mis_datos
   *
   * @return void
   */
  public function mis_datos() : void {
    session_start();
    if (isset($_SESSION['correo'])) {
      $objeto = $this -> service -> datos_usuario_correo($_SESSION['correo']);
      require_once 'views/usuario/mis_datos.php';
    }
  }
  
  /**
   * ver_form_alta
   *
   * @return void
   */
  public function ver_form_alta() : void {
    session_start();
    if (isset($_SESSION['correo'])) {
      $objeto = $this -> service -> datos_usuario_correo($_SESSION['correo']);
      require_once 'views/usuario/alta.php';
    }
  }
  
  /**
   * borrar
   *
   * @return void
   */
  public function borrar() : void {
    $this -> service -> borrar($_POST['id_usuario']);
    header("Location:".base_url."/Usuario/listar");
  }
  
  /**
   * alta
   *
   * @return void
   */
  public function alta(): void {
    $campos_string = array('dni','nombre', 'apellidos', 'direccion', 'localidad', 'telefono');
    $campos_validados = array();

    foreach ($campos_string as $campo) {
      if (isset($_POST[$campo]) && !empty($_POST[$campo])) {
        array_push($campos_validados, filter_var( $_POST[$campo], FILTER_SANITIZE_SPECIAL_CHARS));
      }
    }

    if (isset($_POST['correo']) && !empty($_POST['correo'])) {
      $correo = filter_var( $_POST['correo'], FILTER_SANITIZE_EMAIL);
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    $rol = $_POST['rol'];

    if ( (count($campos_validados)  == count($campos_string)) && isset($correo) && isset($password) && isset($rol)) {
      $this -> service -> alta($campos_validados, $correo, $password, $rol);
      header("Location:".base_url."/Usuario/listar");
    }
  }
  
  /**
   * modificar
   *
   * @return void
   */
  public function modificar(): void {
    session_start();
    $id_usuario = $_POST['id_usuario'];

    $campos_string = array('dni','nombre', 'apellidos', 'direccion', 'localidad', 'telefono');
    $campos_validados = array();

    foreach ($campos_string as $campo) {
      if (isset($_POST[$campo]) && !empty($_POST[$campo])) {
        $campos_validados[$campo] = filter_var( $_POST[$campo], FILTER_SANITIZE_SPECIAL_CHARS);
      }
    }

    if (isset($_POST['correo']) && !empty($_POST['correo'])) {
      $correo = filter_var( $_POST['correo'], FILTER_SANITIZE_EMAIL);
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
      if ($_POST['password'] != $_SESSION['password']) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      }
      else {
        $password_igual = true;
      }
    }

    if ((count($campos_validados)  == count($campos_string)) && isset($correo)) {
      if (isset($password)) {
        $campos_validados['password'] = $password;
      }

      $campos_validados['correo'] = $correo;
      $this -> service ->  modificar($id_usuario, $campos_validados);
      if (isset($password_igual)) {
        header("Location:".base_url."/Usuario/mis_datos");
      }
      else {
        $this -> logout();
      }
    }
  }
    
  /**
   * get_usuario_from_plantacion
   *
   * @param  mixed $id_plantacion
   * @return Usuario
   */
  public function get_usuario_from_plantacion(int $id_plantacion): Usuario {
    return $this -> service -> getUsuarioFromPlantacion($id_plantacion);
  }
}
