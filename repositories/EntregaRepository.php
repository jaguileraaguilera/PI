<?php
namespace repositories;
use lib\BaseDatos;
use models\Entrega;

/**
 * EntregaRepository
 */
class EntregaRepository {
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
     * @return Entrega
     */
    private function extraer_registro(): ?Entrega {
        return ($entrega = $this -> conexion -> extraer_registro()) ? 
            Entrega::fromArray($entrega) : null;
    }
    
    /**
     * listar
     *
     * @return array
     */
    public function listar(): array {
        $this -> conexion -> consulta("SELECT * FROM entrega;");
        return $this -> extraer_todos();
    }
     
    /**
     * datos_entrega
     *
     * @param  mixed $id_entrega
     * @return Entrega
     */
    public function datos_entrega(int $id_entrega): ?Entrega {
        $this -> conexion -> consulta(
            "SELECT * 
            FROM entrega
            WHERE id_entrega = '{$id_entrega}';"
        );

        return $this -> extraer_registro();
    }
    
    /**
     * datos_entregas_correo
     *
     * @param  mixed $correo
     * @return array
     */
    public function datos_entregas_correo(string $correo): array {
        $this -> conexion -> consulta(
            "SELECT entrega.* 
            FROM plantacion, usuario, entrega 
            WHERE plantacion.id_usuario = usuario.id_usuario
            AND plantacion.id_plantacion = entrega.id_plantacion 
            AND usuario.correo = '{$correo}';"
        );
        return $this -> extraer_todos();
    }
    
    /**
     * borrar
     *
     * @param  mixed $id_entrega
     * @return void
     */
    public function borrar(int $id_entrega): void {
        $this -> conexion -> consulta(
            "DELETE FROM entrega
            WHERE id_entrega = '{$id_entrega}';"
        );
    }
    
    /**
     * modificar
     *
     * @param  mixed $id_entrega
     * @param  mixed $parametros
     * @return void
     */
    public function modificar(int $id_entrega, array $parametros): void {
        foreach ($parametros as $atributo => $valor) {
            $this -> conexion -> consulta (
                "UPDATE entrega 
                SET {$atributo} = '{$valor}'
                WHERE id_entrega = '{$id_entrega}';
                "
            );
        }
    }
    
    /**
     * alta
     *
     * @param  mixed $tara
     * @param  mixed $bruto
     * @param  mixed $neto
     * @param  mixed $fecha
     * @param  mixed $hora
     * @param  mixed $id_plantacion
     * @return int
     */
    public function alta(float $tara, float $bruto, float $neto, string $fecha, string $hora, int $id_plantacion): int {
        $this -> conexion -> consulta(
            "INSERT INTO entrega(fecha, hora, tara, bruto, neto, id_plantacion, actual) VALUES (
                '{$fecha}',
                '{$hora}',
                '{$tara}',
                '{$bruto}',
                '{$neto}',
                '{$id_plantacion}',
                1
            );"
        );

        return 1;
    }
    
    /**
     * get_ultima_entrega
     *
     * @return Entrega
     */
    public function get_ultima_entrega(): ?Entrega {
        $this -> conexion -> consulta(
            "SELECT * 
            FROM entrega 
            WHERE id_entrega = (
                SELECT MAX(id_entrega) 
                FROM entrega);
            "
        );
        return $this -> extraer_registro();
    }
    
    /**
     * extraer_todos
     *
     * @return array
     */
    public function extraer_todos(): array {
        $entregas = array();
        $entregasData = $this -> conexion -> extraer_todos();

        foreach ($entregasData as $entregaData) {
            array_push($entregas, Entrega::fromArray($entregaData));
        }

        return $entregas;
    }
}
