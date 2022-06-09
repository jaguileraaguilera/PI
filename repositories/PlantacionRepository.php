<?php
namespace repositories;
use lib\BaseDatos;
use models\Plantacion;

/**
 * PlantacionRepository
 */
class PlantacionRepository {
    private BaseDatos $conexion;
    
    /**
     * __construct
     *
     * @return void
     */
    function __construct() {
        $this -> conexion = new BaseDatos();
    }
        
    /**
     * extraer_registro
     *
     * @return Plantacion
     */
    private function extraer_registro(): ?Plantacion {
        return ($plantacion = $this -> conexion -> extraer_registro()) ? 
            Plantacion::fromArray($plantacion) : null;
    }
        
    /**
     * listar
     *
     * @return array
     */
    public function listar() : array {
        $this -> conexion -> consulta("SELECT * FROM plantacion;");
        return $this -> extraer_todos();
    }
    
    /**
     * borrar
     *
     * @param  mixed $id_plantacion
     * @return void
     */
    public function borrar(int $id_plantacion) {
        $this -> conexion -> consulta(
            "UPDATE plantacion set actual = 0 WHERE id_plantacion ='{$id_plantacion}';"
        );
    }
    
    /**
     * datos_plantacion
     *
     * @param  mixed $correo
     * @return array
     */
    public function datos_plantacion(string $correo): ?array {
        $this -> conexion -> consulta(
            "SELECT plantacion.* 
            FROM plantacion, usuario 
            WHERE plantacion.id_usuario = usuario.id_usuario 
            AND usuario.correo = '{$correo}';"
        );
        return $this -> extraer_todos();
    }
    
    /**
     * datos_plantacion_id
     *
     * @param  mixed $id
     * @return Plantacion
     */
    public function datos_plantacion_id(int $id): ?Plantacion {
        $this -> conexion -> consulta(
            "SELECT * FROM plantacion WHERE id_plantacion = '{$id}';"
        );
        return $this -> extraer_registro();
    }
    
    /**
     * modificar
     *
     * @param  mixed $id_plantacion
     * @param  mixed $parametros
     * @return void
     */
    public function modificar(int $id_plantacion, array $parametros) {
        foreach ($parametros as $atributo => $valor) {
            $this -> conexion -> consulta (
                "UPDATE plantacion 
                SET {$atributo} = '{$valor}'
                WHERE id_plantacion = '{$id_plantacion}';
                "
            );
        }
    }
        
    /**
     * alta
     *
     * @param  mixed $variedad
     * @param  mixed $anio
     * @param  mixed $zona
     * @param  mixed $id_usuario
     * @return void
     */
    public function alta(string $variedad, int $anio, int $zona, int $id_usuario) {
        $this -> conexion -> consulta(
            "INSERT INTO plantacion(variedad, anio, zona, id_usuario, actual) VALUES(
                '{$variedad}',
                '{$anio}',
                '{$zona}',
                '{$id_usuario}',
                1
            );
            "
        );
    }
    
    /**
     * extraer_todos
     *
     * @return array
     */
    public function extraer_todos(): array {
        $plantaciones = array();
        $plantacionesData = $this -> conexion -> extraer_todos();

        foreach ($plantacionesData as $plantacionData) {
            array_push($plantaciones, Plantacion::fromArray($plantacionData));
        }

        return $plantaciones;
    }
}