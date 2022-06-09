<?php
namespace models;

/**
 * Usuario
 */
class Usuario {        
        /**
         * __construct
         *
         * @return void
         */
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
                public int $actual
        ){}
        
        /**
         * getDni
         *
         * @return string
         */
        public function getDni(): string {
                return $this->dni;
        }
        
        /**
         * setDni
         *
         * @param  mixed $dni
         * @return self
         */
        public function setDni(string $dni): self {
                $this->dni = $dni;

                return $this;
        }
        
        /**
         * getNombre
         *
         * @return string
         */
        public function getNombre(): string {
                return $this->nombre;
        }
        
        /**
         * setNombre
         *
         * @param  mixed $nombre
         * @return self
         */
        public function setNombre(string $nombre): self {
                $this->nombre = $nombre;
                return $this;
        }
        
        /**
         * getApellidos
         *
         * @return string
         */
        public function getApellidos(): string {
                return $this->apellidos;
        }
        
        /**
         * setApellidos
         *
         * @param  mixed $apellidos
         * @return self
         */
        public function setApellidos(string $apellidos): self {
                $this->apellidos = $apellidos;
                return $this;
        }
        
        /**
         * getCorreo
         *
         * @return string
         */
        public function getCorreo(): string {
                return $this->correo;
        }
        
        /**
         * setCorreo
         *
         * @param  mixed $correo
         * @return self
         */
        public function setCorreo(string $correo): self {
                $this->correo = $correo;
                return $this;
        }
        
        /**
         * getPassword
         *
         * @return string
         */
        public function getPassword(): string {
                return $this->password;
        }
        
        /**
         * setPassword
         *
         * @param  mixed $password
         * @return self
         */
        public function setPassword(string $password): self {
                $this->password = $password;
                return $this;
        }
        
        /**
         * getRol
         *
         * @return int
         */
        public function getRol(): int {
                return $this->rol;
        }
        
        /**
         * setRol
         *
         * @param  mixed $rol
         * @return self
         */
        public function setRol(int $rol): self {
                $this->rol = $rol;
                return $this;
        }
        
        /**
         * getLocalidad
         *
         * @return string
         */
        public function getLocalidad(): string {
                return $this->localidad;
        }
        
        /**
         * setLocalidad
         *
         * @param  mixed $localidad
         * @return self
         */
        public function setLocalidad(string $localidad): self {
                $this->localidad = $localidad;
                return $this;
        }
        
        /**
         * getTelefono
         *
         * @return string
         */
        public function getTelefono(): string {
                return $this->telefono;
        }
        
        /**
         * setTelefono
         *
         * @param  mixed $telefono
         * @return self
         */
        public function setTelefono(string $telefono): self {
                $this->telefono = $telefono;
                return $this;
        }
        
        /**
         * getIdUsuario
         *
         * @return int
         */
        public function getIdUsuario(): int {
                return $this->id_usuario;
        }
        
        /**
         * setIdUsuario
         *
         * @param  mixed $id_usuario
         * @return self
         */
        public function setIdUsuario(int $id_usuario): self {
                $this->id_usuario = $id_usuario;
                return $this;
        }
        
        /**
         * getDireccion
         *
         * @return string
         */
        public function getDireccion(): string {
                return $this->direccion;
        }
        
        /**
         * setDireccion
         *
         * @param  mixed $direccion
         * @return self
         */
        public function setDireccion(string $direccion): self {
                $this->direccion = $direccion;
                return $this;
        }
        
        /**
         * getActual
         *
         * @return int
         */
        public function getActual(): int {
                return $this->actual;
        }
        
        /**
         * setActual
         *
         * @param  mixed $actual
         * @return self
         */
        public function setActual(int $actual): self {
                $this->actual = $actual;
                return $this;
        }
            
        /**
         * fromArray
         *
         * @param  mixed $data
         * @return Usuario
         */
        public static function fromArray(array $data) :Usuario {
                return new Usuario(...$data);
        }        
}
