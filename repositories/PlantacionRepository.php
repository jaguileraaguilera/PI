<?php

namespace repositories;
use lib\BaseDatos;
use models\Plantacion;

class PlantacionRepository {
    private BaseDatos $conexion;

    function __construct() {
        $this -> conexion = new BaseDatos();
    }
    
    private function extraer_registro(): ?Plantacion {
        return ($plantacion = $this -> conexion -> extraer_registro()) ? 
            Plantacion::fromArray($plantacion) : null;
    }

    public function listar() {
        $this -> conexion -> consulta("SELECT * FROM plantacion;");
        return $this -> extraer_todos();
    }

    public function borrar($id_plantacion) {
        $this -> conexion -> consulta(
            "UPDATE plantacion set actual = 0 WHERE id_plantacion ='{$id_plantacion}';"
        );
    }

    public function datos_plantacion($correo) {
        $this -> conexion -> consulta(
            "SELECT plantacion.* 
            FROM plantacion, usuario 
            WHERE plantacion.id_usuario = usuario.id_usuario 
            AND usuario.correo = '{$correo}';"
        );
        return $this -> extraer_todos();
    }

    public function datos_plantacion_id($id) {
        $this -> conexion -> consulta(
            "SELECT * FROM plantacion WHERE id_plantacion = '{$id}';"
        );
        return $this -> extraer_registro();
    }

    public function modificar($id_plantacion, $parametros) {
        foreach ($parametros as $atributo => $valor) {
            $this -> conexion -> consulta (
                "UPDATE plantacion 
                SET {$atributo} = '{$valor}'
                WHERE id_plantacion = '{$id_plantacion}';
                "
            );
        }
    }
    
    public function alta($variedad, $anio, $zona, $id_usuario) {
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

    public function extraer_todos() {
        $plantaciones = array();
        $plantacionesData = $this -> conexion -> extraer_todos();

        foreach ($plantacionesData as $plantacionData) {
            array_push($plantaciones, Plantacion::fromArray($plantacionData));
        }

        return $plantaciones;
    }
}