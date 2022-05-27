<?php

namespace repositories;
use lib\BaseDatos;
use models\Entrega;

class EntregaRepository {
    private BaseDatos $conexion;

    function __construct() {
        $this -> conexion = new BaseDatos();
    }
    
    private function extraer_registro(): ?Entrega {
        return ($entrega = $this -> conexion -> extraer_registro()) ? 
            Entrega::fromArray($entrega) : null;
    }

    public function listar() {
        $this -> conexion -> consulta("SELECT * FROM entrega;");
        return $this -> extraer_todos();
    }

    public function datos_entrega($id_entrega) {
        $this -> conexion -> consulta(
            "SELECT * 
            FROM entrega
            WHERE id_entrega = '{$id_entrega}';"
        );

        return $this -> extraer_registro();
    }

    public function datos_entregas_correo($correo) {
        $this -> conexion -> consulta(
            "SELECT entrega.* 
            FROM plantacion, usuario, entrega 
            WHERE plantacion.id_usuario = usuario.id_usuario
            AND plantacion.id_plantacion = entrega.id_plantacion 
            AND usuario.correo = '{$correo}';"
        );
        return $this -> extraer_todos();
    }

    public function borrar($id_entrega) {
        $this -> conexion -> consulta(
            "DELETE FROM entrega
            WHERE id_entrega = '{$id_entrega}';"
        );
    }

    public function modificar($id_entrega, $parametros) {
        foreach ($parametros as $atributo => $valor) {
            $this -> conexion -> consulta (
                "UPDATE entrega 
                SET {$atributo} = '{$valor}'
                WHERE id_entrega = '{$id_entrega}';
                "
            );
        }
    }

    public function alta($tara, $bruto, $neto, $fecha, $hora, $id_plantacion) {
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

    public function get_ultima_entrega() {
        $this -> conexion -> consulta(
            " SELECT * 
            FROM entrega 
            WHERE id_entrega = (
                SELECT MAX(id_entrega) 
                FROM entrega);
            "
        );
        return $this -> extraer_registro();
    }

    public function extraer_todos() {
        $entregas = array();
        $entregasData = $this -> conexion -> extraer_todos();

        foreach ($entregasData as $entregaData) {
            array_push($entregas, Entrega::fromArray($entregaData));
        }

        return $entregas;
    }
}
