<?php
namespace services;
use repositories\EntregaRepository;

class EntregaService {
    private EntregaRepository $repository;

    function __construct() {
        $this -> repository = new EntregaRepository();
    }

    public function guardar(array $Entrega) : void {
        $this -> repository -> guardar($Entrega);
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
}