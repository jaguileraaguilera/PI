<?php
namespace models;

class Entrega {
    function __construct(
        private int $id_entrega,
        private string $fecha,
        private string $hora,
        private float $tara,
        private float $bruto,
        private float $neto,
        private int $id_plantacion
    ){}

    /**
     * Get the value of id_entrega
     */
    public function getIdEntrega()
    {
            return $this->id_entrega;
    }

    /**
     * Set the value of id_entrega
     */
    public function setIdEntrega($id_entrega): self
    {
            $this->id_entrega = $id_entrega;

            return $this;
    }

    /**
     * Get the value of fecha
     */
    public function getFecha()
    {
            return $this->fecha;
    }

    /**
     * Set the value of fecha
     */
    public function setFecha($fecha): self
    {
            $this->fecha = $fecha;

            return $this;
    }

    /**
     * Get the value of hora
     */
    public function getHora()
    {
            return $this->hora;
    }

    /**
     * Set the value of hora
     */
    public function setHora($hora): self
    {
            $this->hora = $hora;

            return $this;
    }

    /**
     * Get the value of tara
     */
    public function getTara()
    {
            return $this->tara;
    }

    /**
     * Set the value of tara
     */
    public function setTara($tara): self
    {
            $this->tara = $tara;

            return $this;
    }

    /**
     * Get the value of bruto
     */
    public function getBruto()
    {
            return $this->bruto;
    }

    /**
     * Set the value of bruto
     */
    public function setBruto($bruto): self
    {
            $this->bruto = $bruto;

            return $this;
    }

    /**
     * Get the value of neto
     */
    public function getNeto()
    {
            return $this->neto;
    }

    /**
     * Set the value of neto
     */
    public function setNeto($neto): self
    {
            $this->neto = $neto;

            return $this;
    }

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

    public static function fromArray(array $data) :Entrega {
        /**Permite hacer la correspondencia o mapeo de cada array 
         * de un registro obtenido de la consulta de la base de datos
         * a un objeto Entrega */

        return new Entrega (
            $data['id_entrega'],
            $data['fecha'],
            $data['hora'],
            $data['tara'],
            $data['bruto'],
            $data['neto'],
            $data['id_plantacion'],
        );
    }
}
