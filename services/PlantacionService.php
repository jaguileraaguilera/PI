<?php
namespace services;
use repositories\PlantacionRepository;

class PlantacionService {
    private PlantacionRepository $repository;

    function __construct() {
        $this -> repository = new PlantacionRepository();
    }

    public function listar() {
        return $this -> repository -> listar();
    }

    public function borrar($id_plantacion): void {
        $this -> repository -> borrar($id_plantacion);
    }

    public function datos_plantacion($correo) {
        return $this -> repository -> datos_plantacion($correo);
    }

    public function datos_plantacion_id($id) {
        return $this -> repository -> datos_plantacion_id($id);
    }

    public function alta($variedad, $anio, $zona, $id_usuario) {
        return $this -> repository -> alta($variedad, $anio, $zona, $id_usuario);
    }

    public function modificar($id_plantacion, $parametros) {
        return $this-> repository -> modificar($id_plantacion, $parametros);
    }
}