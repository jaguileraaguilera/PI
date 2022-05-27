<?php
namespace services;
use repositories\EntregaRepository;

class EntregaService {
    private EntregaRepository $repository;

    function __construct() {
        $this -> repository = new EntregaRepository();
    }

    public function listar() {
        return $this -> repository -> listar();
    }

    public function borrar($id_entrega): void {
        $this -> repository -> borrar($id_entrega);
    }

    public function datos_entrega($id_entrega) {
        return $this -> repository -> datos_entrega($id_entrega);
    }

    public function datos_entregas_correo($correo) {
        return $this -> repository -> datos_entregas_correo($correo);
    }

    public function alta($tara, $bruto, $neto, $fecha, $hora, $id_plantacion) {
        return $this -> repository -> alta($tara, $bruto, $neto, $fecha, $hora, $id_plantacion);
    }

    public function modificar($id_entrega, $parametros) {
        return $this-> repository -> modificar($id_entrega, $parametros);
    }

    public function get_ultima_entrega() {
        return $this -> repository -> get_ultima_entrega();
    }
}