<?php

namespace repositories;
use lib\BaseDatos;
use models\Usuario;

class UsuarioRepository {
    private BaseDatos $conexion;

    function __construct() {
        $this -> conexion = new BaseDatos();
    }
    
    private function extraer_registro(): ?Usuario {
        return ($usuario = $this -> conexion -> extraer_registro()) ? 
            Usuario::fromArray($usuario) : null;
    }

    public function inicia_sesion($correo, $password) {
        $this -> conexion -> consulta(
            "SELECT * FROM usuario WHERE 
            correo='{$correo}' AND password='{$password}';");
        return $this -> extraer_registro();
    }

    public function listar() {
        $this -> conexion -> consulta("SELECT * FROM usuario;");
        return $this -> extraer_todos();
    }

    public function borrar($id_usuario) {
        $this -> conexion -> consulta(
            "UPDATE usuario set actual = 0 WHERE id_usuario ='{$id_usuario}';"
        );
    }

    public function guardar($usuario) {
        $this -> conexion -> consulta(
            "INSERT INTO usuario VALUES(
                '{$usuario['dni']}', 
                '{$usuario['nombre']}', 
                '{$usuario['apellidos']}',
                '{$usuario['correo']}',
                '{$usuario['password']}', 
                '{$usuario['esAdmin']}');
            "
        );
    }

    public function extraer_todos() {
        $usuarios = array();
        $usuariosData = $this -> conexion -> extraer_todos();

        foreach ($usuariosData as $usuarioData) {
            array_push($usuarios, Usuario::fromArray($usuarioData));
        }

        return $usuarios;
    }

    public function datos_usuario($id_usuario) {
        $this -> conexion -> consulta(
            "SELECT * FROM usuario WHERE id_usuario='{$id_usuario}';"
        );

        return $this -> extraer_registro();
    }

    public function datos_usuario_correo($correo) {
        $this -> conexion -> consulta(
            "SELECT * FROM usuario WHERE correo='{$correo}';"
        );

        return $this -> extraer_registro();
    }
}
