<?php
namespace controllers;
use services\EntregaService;
use controllers\PlantacionController;
use controllers\UsuarioController;
use controllers\ErrorController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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

  public function get_ultima_entrega() {
    return $this -> service -> get_ultima_entrega();
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
      $realizada = $this -> service -> alta($tara, $bruto, $neto, $fecha, $hora, $id_plantacion);

      if ($realizada) {
        $this -> enviar_ticket($tara, $bruto, $neto, $fecha, $hora, $id_plantacion);
        header("Location:".base_url."/Entrega/nueva");
      }
    }
  }

  public function enviar_ticket($tara, $bruto, $neto, $fecha, $hora, $id_plantacion) {
    $usuarioController = new UsuarioController();
    $socio = $usuarioController -> getUsuarioFromPlantacion((int) $id_plantacion);
    $plantacionController = new PlantacionController();
    $plantacion = $plantacionController -> datos_plantacion($id_plantacion);
    $zona = $plantacion -> getZona();
    $num_socio = $socio -> getIdUsuario();
    $nombre = $socio -> getNombre();
    $apellidos = $socio -> getApellidos();
    $id_entrega = $this -> get_ultima_entrega() -> getIdEntrega();

    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'basculacosafra@gmail.com';                     
        $mail->Password   = 'bascula10@cosafra.com';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;
        $mail->SMTPDebug  = 0;                                    

        //Recipients
        $mail->setFrom('basculacosafra@gmail.com');  
        $mail->addAddress($socio -> getCorreo());

        //Content
        $mail->isHTML(true);                                
        $mail->Subject = "Ticket $id_entrega. Plantacion $id_plantacion";
        $mail->Body    = "
          <h1>Ticket de entrega</h1>
          <h2>Datos del ticket:</h2>
          <div>
            <p>Número: $id_entrega</p>
            <p>Fecha: $fecha</p>
            <p>Hora: $hora</p>
            <p>Número del socio: $num_socio</p>
            <p>Nombre: $nombre $apellidos</p>
          </div>
          <h2>Descripción:</h2>
          <div>
            <p>Producto: Espárragos UT$zona</p>
            <p>Peso bruto (kg): $bruto</p>
            <p>Tara (kg): $tara</p>
            <p>Peso neto (kg): $neto</p>
          </div>
          <br>
          <p>En Huétor-Tájar a $fecha</p>
        ";
        $mail->AltBody = "
          TICKET DE ENTREGA

          Datos del ticket:
            Fecha: $fecha
            Hora: $hora
            Número del socio: $num_socio
            Nombre: $nombre $apellidos
          
          Descripción:
            Producto: Espárragos UT$zona
            Peso bruto (kg): $bruto
            Tara (kg): $tara
            Peso neto (kg): $neto
            
          En Huétor-Tájar a $fecha
        ";

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }
}