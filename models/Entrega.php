<?php
namespace models;

class Entrega {
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

    public function getIdEntrega() {
        return $this->id_entrega;
    }

    public function setIdEntrega($id_entrega): self {
        $this->id_entrega = $id_entrega;
        return $this;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha): self {
        $this->fecha = $fecha;
        return $this;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora): self {
        $this->hora = $hora;
        return $this;
    }

    public function getTara() {
        return $this->tara;
    }

    public function setTara($tara): self{
        $this->tara = $tara;
        return $this;
    }

    public function getBruto() {
        return $this->bruto;
    }

    public function setBruto($bruto): self {
        $this->bruto = $bruto;
        return $this;
    }

    public function getNeto() {
        return $this->neto;
    }

    public function setNeto($neto): self {
        $this->neto = $neto;
        return $this;
    }

    public function getIdPlantacion() {
        return $this->id_plantacion;
    }

    public function setIdPlantacion($id_plantacion): self {
        $this->id_plantacion = $id_plantacion;
        return $this;
    }

    public function getActual() {
        return $this->actual;
    }

    public function setActual($actual): self {
        $this->actual = $actual;
        return $this;
    }

    public static function fromArray(array $data) :Entrega {
        return new Entrega (
            $data['id_entrega'],
            $data['fecha'],
            $data['hora'],
            $data['tara'],
            $data['bruto'],
            $data['neto'],
            $data['id_plantacion'],
            $data['actual']
        );
    }
}
