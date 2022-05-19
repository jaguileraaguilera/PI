<?php
namespace models;

class Usuario {
    function __construct(
        public int    $id_usuario,
        public int    $rol,
        public string $dni,
        public string $nombre,
        public string $apellidos,
        public string $correo,
        public string $password,
        public string $telefono,
        public string $localidad,
        public string $direccion
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
         * Get the value of direccion
         */
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         */
        public function setDireccion($direccion): self
        {
                $this->direccion = $direccion;

                return $this;
        }
    
    public static function fromArray(array $data) :Usuario {
        return new Usuario (
                $data['id_usuario'],
                $data['rol'],
                $data['dni'],
                $data['nombre'],
                $data['apellidos'],
                $data['correo'],
                $data['password'],
                $data['telefono'],
                $data['localidad'],
                $data['direccion']
        );
    }
}
