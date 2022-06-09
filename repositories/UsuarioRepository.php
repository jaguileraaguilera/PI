<?php
namespace repositories;
use lib\BaseDatos;
use models\Usuario;

/**
 * UsuarioRepository
 */
class UsuarioRepository {
    private BaseDatos $conexion;
    
    /**
     * __construct
     *
     * @return void
     */
    function __construct() {
        $this -> conexion = new BaseDatos();
    }
        
    /**
     * extraer_registro
     *
     * @return Usuario
     */
    private function extraer_registro(): ?Usuario {
        return ($usuario = $this -> conexion -> extraer_registro()) ? 
            Usuario::fromArray($usuario) : null;
    }
        
    /**
     * login
     *
     * @param  mixed $correo
     * @param  mixed $password
     * @return Usuario
     */
    public function login(string $correo, string $password): ?Usuario {
        $this -> conexion -> consulta(
            "SELECT * FROM usuario WHERE 
            correo='{$correo}' AND password='{$password}';");
        return $this -> extraer_registro();
    }
    
    /**
     * listar
     *
     * @return array
     */
    public function listar(): array {
        $this -> conexion -> consulta("SELECT * FROM usuario;");
        return $this -> extraer_todos();
    }
    
    /**
     * borrar
     *
     * @param  mixed $id_usuario
     * @return void
     */
    public function borrar(int $id_usuario): void {
        $this -> conexion -> consulta(
            "UPDATE usuario set actual = 0 WHERE id_usuario ='{$id_usuario}';"
        );
    }
    
    /**
     * datos_usuario
     *
     * @param  mixed $id_usuario
     * @return Usuario
     */
    public function datos_usuario(int $id_usuario): ?Usuario {
        $this -> conexion -> consulta(
            "SELECT * FROM usuario WHERE id_usuario='{$id_usuario}';"
        );

        return $this -> extraer_registro();
    }
    
    /**
     * datos_usuario_correo
     *
     * @param  mixed $correo
     * @return Usuario
     */
    public function datos_usuario_correo(string $correo): ?Usuario {
        $this -> conexion -> consulta(
            "SELECT * FROM usuario WHERE correo='{$correo}';"
        );

        return $this -> extraer_registro();
    }
    
    /**
     * extraer_todos
     *
     * @return array
     */
    public function extraer_todos(): array {
        $usuarios = array();
        $usuariosData = $this -> conexion -> extraer_todos();

        foreach ($usuariosData as $usuarioData) {
            array_push($usuarios, Usuario::fromArray($usuarioData));
        }

        return $usuarios;
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
    public function alta(array $campos_validados, string $correo, string $password, int $rol): void {
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
    
    /**
     * modificar
     *
     * @param  mixed $id_usuario
     * @param  mixed $parametros
     * @return void
     */
    public function modificar(int $id_usuario, array $parametros): void {
        foreach ($parametros as $atributo => $valor) {
            $this -> conexion -> consulta (
                "UPDATE usuario
                SET {$atributo} = '{$valor}'
                WHERE id_usuario = '{$id_usuario}';
                "
            );
        }
    }
    
    /**
     * getUsuarioFromPlantacion
     *
     * @param  mixed $id_plantacion
     * @return Usuario
     */
    public function get_usuario_from_plantacion(int $id_plantacion): ?Usuario {
        $this -> conexion -> consulta(
            "SELECT usuario.* 
            FROM usuario, plantacion 
            WHERE usuario.id_usuario = plantacion.id_usuario
            AND id_plantacion = '{$id_plantacion}';
            "
        );

        return $this -> extraer_registro();
    }
}
