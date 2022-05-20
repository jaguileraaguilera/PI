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
                public string $direccion,
                public string $actual
        ){}

        public function getDni() {
                return $this->dni;
        }

        public function setDni($dni): self {
                $this->dni = $dni;

                return $this;
        }

        public function getNombre() {
                return $this->nombre;
        }

        public function setNombre($nombre): self {
                $this->nombre = $nombre;
                return $this;
        }

        public function getApellidos() {
                return $this->apellidos;
        }

        public function setApellidos($apellidos): self {
                $this->apellidos = $apellidos;
                return $this;
        }

        public function getCorreo() {
                return $this->correo;
        }

        public function setCorreo($correo): self {
                $this->correo = $correo;
                return $this;
        }

        public function getPassword() {
                return $this->password;
        }

        public function setPassword($password): self {
                $this->password = $password;
                return $this;
        }

        public function getRol() {
                return $this->rol;
        }

        public function setRol($rol): self {
                $this->rol = $rol;
                return $this;
        }

        public function getLocalidad() {
                return $this->localidad;
        }

        public function setLocalidad($localidad): self {
                $this->localidad = $localidad;
                return $this;
        }

        public function getTelefono() {
                return $this->telefono;
        }

        public function setTelefono($telefono): self {
                $this->telefono = $telefono;
                return $this;
        }

        public function getIdUsuario() {
                return $this->id_usuario;
        }

        public function setIdUsuario($id_usuario): self {
                $this->id_usuario = $id_usuario;
                return $this;
        }

        public function getDireccion() {
                return $this->direccion;
        }

        public function setDireccion($direccion): self {
                $this->direccion = $direccion;
                return $this;
        }

        public function getActual() {
                return $this->actual;
        }

        public function setActual($actual): self {
                $this->actual = $actual;
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
                        $data['direccion'],
                        $data['actual']
                );
        }        
}
