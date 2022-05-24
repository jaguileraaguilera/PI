<?php
namespace services;
use repositories\UsuarioRepository;

class UsuarioService {
    private UsuarioRepository $repository;

    function __construct() {
        $this -> repository = new UsuarioRepository();
    }

    public function inicia_sesion($correo, $password) {
        return $this -> repository -> inicia_sesion($correo, $password);
    }

    public function listar() {
        return $this -> repository -> listar();
    }

    public function borrar(string $id_usuario): void {
        $this -> repository -> borrar($id_usuario);
    }

    public function datos_usuario($id_usuario) {
        return $this -> repository -> datos_usuario($id_usuario);
    }

    public function datos_usuario_correo($correo) {
        return $this -> repository -> datos_usuario_correo($correo);
    }

    public function alta($campos_validados, $correo, $password, $rol) {
        return $this -> repository -> alta($campos_validados, $correo, $password, $rol);
    }

    public function modificar($id_usuario, $campos_validados) {
        return $this -> repository -> modificar($id_usuario, $campos_validados);
    }
}