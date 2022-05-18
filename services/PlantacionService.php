<?php
namespace services;
use repositories\PlantacionRepository;

class PlantacionService {
    private PlantacionRepository $repository;

    function __construct() {
        $this -> repository = new PlantacionRepository();
    }

    public function guardar(array $plantacion) : void {
        $this -> repository -> guardar($plantacion);
    }

    public function listar() {
        return $this -> repository -> listar();
    }

    public function borrar(string $id_plantacion): void {
        $this -> repository -> borrar($id_plantacion);
    }

    public function datos_plantacion($id_plantacion) {
        return $this -> repository -> datos_Plantacion($id_plantacion);
    }
}