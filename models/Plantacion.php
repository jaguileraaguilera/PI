<?php
namespace models;

class Plantacion {
    function __construct(
        private int $id_plantacion,
        private string $variedad,
        private int $anio,
        private int $id_usuario
    ){}

    /**
     * Get the value of id_plantacion
     */
    public function getIdPlantacion()
    {
            return $this->id_plantacion;
    }

    /**
     * Set the value of id_plantacion
     */
    public function setIdPlantacion($id_plantacion): self
    {
            $this->id_plantacion = $id_plantacion;

            return $this;
    }

    /**
     * Get the value of variedad
     */
    public function getVariedad()
    {
            return $this->variedad;
    }

    /**
     * Set the value of variedad
     */
    public function setVariedad($variedad): self
    {
            $this->variedad = $variedad;

            return $this;
    }

    /**
     * Get the value of anio
     */
    public function getAnio()
    {
            return $this->anio;
    }

    /**
     * Set the value of anio
     */
    public function setAnio($anio): self
    {
            $this->anio = $anio;

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

    public static function fromArray(array $data) :Plantacion {
        /**Permite hacer la correspondencia o mapeo de cada array 
         * de un registro obtenido de la consulta de la base de datos
         * a un objeto Plantacion */

        return new Plantacion (
            $data['id_plantacion'],
            $data['variedad'],
            $data['anio'],
            $data['id_usuario']
        );
    }
}
