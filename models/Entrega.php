<?php
namespace models;

/**
 * Entrega
 */
class Entrega {    
    /**
     * __construct
     *
     * @return void
     */
    function __construct(
        public int $id_entrega,
        public string $fecha,
        public string $hora,
        public float $tara,
        public float $bruto,
        public float $neto,
        public int $id_plantacion,
        public int $actual
    ){}
    
    /**
     * getIdEntrega
     *
     * @return int
     */
    public function getIdEntrega(): int {
        return $this->id_entrega;
    }
    
    /**
     * setIdEntrega
     *
     * @param  mixed $id_entrega
     * @return self
     */
    public function setIdEntrega($id_entrega): self {
        $this->id_entrega = $id_entrega;
        return $this;
    }
    
    /**
     * getFecha
     *
     * @return string
     */
    public function getFecha(): string {
        return $this->fecha;
    }
    
    /**
     * setFecha
     *
     * @param  mixed $fecha
     * @return self
     */
    public function setFecha($fecha): self {
        $this->fecha = $fecha;
        return $this;
    }
    
    /**
     * getHora
     *
     * @return string
     */
    public function getHora(): string {
        return $this->hora;
    }
    
    /**
     * setHora
     *
     * @param  mixed $hora
     * @return self
     */
    public function setHora($hora): self {
        $this->hora = $hora;
        return $this;
    }
    
    /**
     * getTara
     *
     * @return float
     */
    public function getTara(): float {
        return $this->tara;
    }
    
    /**
     * setTara
     *
     * @param  mixed $tara
     * @return self
     */
    public function setTara($tara): self{
        $this->tara = $tara;
        return $this;
    }
    
    /**
     * getBruto
     *
     * @return float
     */
    public function getBruto(): float {
        return $this->bruto;
    }
    
    /**
     * setBruto
     *
     * @param  mixed $bruto
     * @return self
     */
    public function setBruto($bruto): self {
        $this->bruto = $bruto;
        return $this;
    }
    
    /**
     * getNeto
     *
     * @return float
     */
    public function getNeto(): float {
        return $this->neto;
    }
    
    /**
     * setNeto
     *
     * @param  mixed $neto
     * @return self
     */
    public function setNeto($neto): self {
        $this->neto = $neto;
        return $this;
    }
    
    /**
     * getIdPlantacion
     *
     * @return int
     */
    public function getIdPlantacion(): int {
        return $this->id_plantacion;
    }
    
    /**
     * setIdPlantacion
     *
     * @param  mixed $id_plantacion
     * @return self
     */
    public function setIdPlantacion($id_plantacion): self {
        $this->id_plantacion = $id_plantacion;
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
    public function setActual($actual): self {
        $this->actual = $actual;
        return $this;
    }
    
    /**
     * fromArray
     *
     * @param  mixed $data
     * @return Entrega
     */
    public static function fromArray(array $data): Entrega {
        return new Entrega (...$data);
    }
}
