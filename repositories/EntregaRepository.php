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

    public function borrar($id_entrega) {
    }

    public function guardar($entrega) {
        // $this -> conexion -> consulta(
        //     "INSERT INTO Entrega VALUES(
        //         '{$entrega['nombre']}', 
            
        //     );
        //     "
        // );
    }

    public function extraer_todos() {
        $entregas = array();
        $entregasData = $this -> conexion -> extraer_todos();

        foreach ($entregasData as $entregaData) {
            array_push($entregas, Entrega::fromArray($entregaData));
        }

        return $entregas;
    }

    public function datos_entrega($id_entrega) {
        $this -> conexion -> consulta(
            "SELECT * FROM entrega WHERE id_entrega='{$id_entrega}';"
        );

        return $this -> extraer_registro();
    }
}
