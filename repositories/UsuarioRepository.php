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

    public function extraer_todos() {
        $usuarios = array();
        $usuariosData = $this -> conexion -> extraer_todos();

        foreach ($usuariosData as $usuarioData) {
            array_push($usuarios, Usuario::fromArray($usuarioData));
        }

        return $usuarios;
    }

    public function alta($campos_validados, $correo, $password, $rol) {
        $this -> conexion -> consulta(
            "INSERT INTO usuario(dni, nombre, apellidos, direccion, localidad, telefono, correo, password, rol, actual) VALUES (
                '{$campos_validados[0]}',
                '{$campos_validados[1]}',
                '{$campos_validados[2]}',
                '{$campos_validados[3]}',
                '{$campos_validados[4]}',
                '{$campos_validados[5]}',
                '{$correo}',
                '{$password}',
                '{$rol}',
                1
            );"
        );
    }

    public function modificar($id_usuario, $parametros) {
        foreach ($parametros as $atributo => $valor) {
            $this -> conexion -> consulta (
                "UPDATE usuario
                SET {$atributo} = '{$valor}'
                WHERE id_usuario = '{$id_usuario}';
                "
            );
        }
    }
}
