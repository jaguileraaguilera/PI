<?php
namespace models;

class Plantacion {
        function __construct(
                public int $id_plantacion,
                public string $variedad,
                public int $anio,
                public int $zona,
                public int $id_usuario,
                public int $actual
        ){}
        
        public function getIdPlantacion() {
                return $this->id_plantacion;
        }

        public function setIdPlantacion($id_plantacion): self{
                $this->id_plantacion = $id_plantacion;
                return $this;
        }

        public function getVariedad() {
                return $this->variedad;
        }

        public function setVariedad($variedad): self {
                $this->variedad = $variedad;
                return $this;
        }

        public function getAnio() {
                return $this->anio;
        }

        public function setAnio($anio): self {
                $this->anio = $anio;
                return $this;
        }

        public function getZona() {
                return $this->zona;
        }

        public function setZona($zona): self {
                $this->zona = $zona;
                return $this;
        }

        public function getIdUsuario() {
                return $this->id_usuario;
        }

        public function setIdUsuario($id_usuario): self {
                $this->id_usuario = $id_usuario;
                return $this;
        }

        public function getActual() {
                return $this->actual;
        }

        public function setActual($actual): self {
                $this->actual = $actual;
                return $this;
        }

        public static function fromArray(array $data) :Plantacion {
                return new Plantacion (
                        $data['id_plantacion'],
                        $data['variedad'],
                        $data['anio'],
                        $data['zona'],
                        $data['id_usuario'],
                        $data['actual']
                );
        }
}
