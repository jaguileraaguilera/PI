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
        
    }

    public function guardar($Plantacion) {
        // $this -> conexion -> consulta(
        //     "INSERT INTO Plantacion VALUES(
        //         '{$Plantacion['id_plantacion']}',

        //     ');
        //     "
        // );
    }

    public function extraer_todos() {
        $plantaciones = array();
        $plantacionesData = $this -> conexion -> extraer_todos();

        foreach ($plantacionesData as $plantacionData) {
            array_push($plantaciones, Plantacion::fromArray($plantacionData));
        }

        return $plantaciones;
    }

    public function datos_plantacion($id_plantacion) {
        $this -> conexion -> consulta(
            "SELECT * FROM plantacion WHERE id_plantacion='{$id_plantacion}';"
        );

        return $this -> extraer_registro();
    }
}