<?php
namespace models;

/**
 * Plantacion
 */
class Plantacion {        
        /**
         * __construct
         *
         * @return void
         */
        function __construct(
                public int $id_plantacion,
                public string $variedad,
                public int $anio,
                public int $zona,
                public int $id_usuario,
                public int $actual
        ){}
                
        /**
         * getIdPlantacion
         *
         * @return int
         */
        public function getIdPlantacion() : int {
                return $this->id_plantacion;
        }
        
        /**
         * setIdPlantacion
         *
         * @param  mixed $id_plantacion
         * @return self
         */
        public function setIdPlantacion(int $id_plantacion): self{
                $this->id_plantacion = $id_plantacion;
                return $this;
        }
        
        /**
         * getVariedad
         *
         * @return string
         */
        public function getVariedad() : string {
                return $this->variedad;
        }
        
        /**
         * setVariedad
         *
         * @param  mixed $variedad
         * @return self
         */
        public function setVariedad(string $variedad): self {
                $this->variedad = $variedad;
                return $this;
        }
        
        /**
         * getAnio
         *
         * @return int
         */
        public function getAnio(): int {
                return $this->anio;
        }
        
        /**
         * setAnio
         *
         * @param  mixed $anio
         * @return self
         */
        public function setAnio(int $anio): self {
                $this->anio = $anio;
                return $this;
        }
        
        /**
         * getZona
         *
         * @return int
         */
        public function getZona(): int {
                return $this->zona;
        }
        
        /**
         * setZona
         *
         * @param  mixed $zona
         * @return self
         */
        public function setZona(int $zona): self {
                $this->zona = $zona;
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
         * @return Plantacion
         */
        public static function fromArray(array $data) :Plantacion {
                return new Plantacion (...$data);
        }
}
