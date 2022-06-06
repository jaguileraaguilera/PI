<?php
namespace lib;
use PDO;
use PDOException;

/**
 * BaseDatos
 */
class BaseDatos {
  
  private PDO $conexion;
  private mixed $resultado;
    
  /**
   * __construct
   *
   * @return void
   */
  function __construct(
    private string $servidor = SERVIDOR,
    private string $usuario = USUARIO,
    private string $pass = PASS,
    private string $base_datos= BASE_DATOS
  ) {
    $this->conexion = $this->conectar();
  }
    
  /**
   * conectar
   *
   * @return PDO
   */
  private function conectar(): PDO {
    try {
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::MYSQL_ATTR_FOUND_ROWS => true
          );
        $conexion = new PDO("mysql:host={$this->servidor};dbname={$this->base_datos}", $this->usuario, $this->pass, $opciones);
        return $conexion;
    } 
    catch(PDOException $e) {
        echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
        exit;
    }
  }
    
  /**
   * consulta
   *
   * @param  mixed $consultaSQL
   * @return void
   */
  public function consulta(string $consultaSQL): void {
      $this->resultado = $this->conexion->query($consultaSQL);
  }
  
  /**
   * extraer_registro
   *
   * @return mixed
   */
  public function extraer_registro(): mixed {
    return ($fila = $this->resultado->fetch(PDO::FETCH_ASSOC )) ? $fila:false;
    
  }
  
  /**
   * extraer_todos
   *
   * @return array
   */
  public function extraer_todos(): array {
    return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
  }
}
