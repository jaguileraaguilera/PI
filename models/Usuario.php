<?php
namespace models;

class Usuario {
    function __construct(
        private string $dni,
        private string $nombre,
        private string $apellidos,
        private string $correo,
        private string $password,
        private int    $rol,
        private string $localidad,
        private string $telefono,
        private int    $id_usuario,
        private string $direcion
    ){}

    /**
     * Get the value of dni
     */
    public function getDni()
    {
            return $this->dni;
    }

    /**
     * Set the value of dni
     */
    public function setDni($dni): self
    {
            $this->dni = $dni;

            return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
            return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
            $this->nombre = $nombre;

            return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
            return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos($apellidos): self
    {
            $this->apellidos = $apellidos;

            return $this;
    }

    /**
     * Get the value of correo
     */
    public function getCorreo()
    {
            return $this->correo;
    }

    /**
     * Set the value of correo
     */
    public function setCorreo($correo): self
    {
            $this->correo = $correo;

            return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
            return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
            $this->password = $password;

            return $this;
    }

    /**
     * Get the value of rol
     */
    public function getRol()
    {
            return $this->rol;
    }

    /**
     * Set the value of rol
     */
    public function setRol($rol): self
    {
            $this->rol = $rol;

            return $this;
    }

    /**
     * Get the value of localidad
     */
    public function getLocalidad()
    {
            return $this->localidad;
    }

    /**
     * Set the value of localidad
     */
    public function setLocalidad($localidad): self
    {
            $this->localidad = $localidad;

            return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
            return $this->telefono;
    }

    /**
     * Set the value of telefono
     */
    public function setTelefono($telefono): self
    {
            $this->telefono = $telefono;

            return $this;
    }

    /**
     * Get the value of id_usuario
     */
    public function getIdUsuario()
    {
            return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     */
    public function setIdUsuario($id_usuario): self
    {
            $this->id_usuario = $id_usuario;

            return $this;
    }

    /**
     * Get the value of direcion
     */
    public function getDirecion()
    {
            return $this->direcion;
    }

    /**
     * Set the value of direcion
     */
    public function setDirecion($direcion): self
    {
            $this->direcion = $direcion;

            return $this;
    }

    public static function fromArray(array $data) :Usuario {
        /**Permite hacer la correspondencia o mapeo de cada array 
         * de un registro obtenido de la consulta de la base de datos
         * a un objeto Usuario */

        return new Usuario (
            $data['dni'],
            $data['nombre'],
            $data['apellidos'],
            $data['correo'],
            $data['password'],
            $data['rol'],
            $data['localidad'],
            $data['telefono'],
            $data['id_usuario'],
            $data['direccion']
        );
    }
}
