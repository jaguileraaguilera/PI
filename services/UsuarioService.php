<?php
namespace services;
use repositories\UsuarioRepository;
use models\Usuario;

/**
 * UsuarioService
 */
class UsuarioService {
    private UsuarioRepository $repository;
    
    /**
     * __construct
     *
     * @return void
     */
    function __construct() {
        $this -> repository = new UsuarioRepository();
    }
        
    /**
     * login
     *
     * @param  mixed $correo
     * @param  mixed $password
     * @return Usuario
     */
    public function login(string $correo, string $password): ?Usuario {
        return $this -> repository -> login($correo, $password);
    }
    
    /**
     * listar
     *
     * @return array
     */
    public function listar(): array {
        return $this -> repository -> listar();
    }
    
    /**
     * borrar
     *
     * @param  mixed $id_usuario
     * @return void
     */
    public function borrar(string $id_usuario): void {
        $this -> repository -> borrar($id_usuario);
    }
        
    /**
     * datos_usuario
     *
     * @param  mixed $id_usuario
     * @return Usuario
     */
    public function datos_usuario(int $id_usuario): ?Usuario  {
        return $this -> repository -> datos_usuario($id_usuario);
    }
    
    /**
     * datos_usuario_correo
     *
     * @param  mixed $correo
     * @return Usuario
     */
    public function datos_usuario_correo($correo): ?Usuario {
        return $this -> repository -> datos_usuario_correo($correo);
    }
    
    /**
     * alta
     *
     * @param  mixed $campos_validados
     * @param  mixed $correo
     * @param  mixed $password
     * @param  mixed $rol
     * @return void
     */
    public function alta(array $campos_validados, string $correo, string $password, int $rol) {
        return $this -> repository -> alta($campos_validados, $correo, $password, $rol);
    }
    
    /**
     * modificar
     *
     * @param  mixed $id_usuario
     * @param  mixed $campos_validados
     * @return void
     */
    public function modificar(int $id_usuario, array $campos_validados) {
        return $this -> repository -> modificar($id_usuario, $campos_validados);
    }
    
    /**
     * getUsuarioFromPlantacion
     *
     * @param  mixed $id_plantacion
     * @return Usuario
     */
    public function getUsuarioFromPlantacion(int $id_plantacion): ?Usuario {
        return $this -> repository -> getUsuarioFromPlantacion($id_plantacion);
    }
}