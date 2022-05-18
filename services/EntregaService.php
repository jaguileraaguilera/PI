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

    public function borrar(string $dni_Entrega): void {
        $this -> repository -> borrar($dni_Entrega);
    }
}