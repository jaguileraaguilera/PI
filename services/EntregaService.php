<?php
namespace services;
use repositories\EntregaRepository;
use models\Entrega;

/**
 * EntregaService
 */
class EntregaService {
    private EntregaRepository $repository;
    
    /**
     * __construct
     *
     * @return void
     */
    function __construct() {
        $this -> repository = new EntregaRepository();
    }
    
    /**
     * listar
     *
     * @return array
     */
    public function listar(): array {
        return $this -> repository -> listar();
    }
    
    /**
     * borrar
     *
     * @param  mixed $id_entrega
     * @return void
     */
    public function borrar(int $id_entrega): void {
        $this -> repository -> borrar($id_entrega);
    }
    
    /**
     * datos_entrega
     *
     * @param  mixed $id_entrega
     * @return Entrega
     */
    public function datos_entrega(int $id_entrega): ?Entrega {
        return $this -> repository -> datos_entrega($id_entrega);
    }
    
    /**
     * datos_entregas_correo
     *
     * @param  mixed $correo
     * @return array
     */
    public function datos_entregas_correo(string $correo): array {
        return $this -> repository -> datos_entregas_correo($correo);
    }
    
    /**
     * alta
     *
     * @param  mixed $tara
     * @param  mixed $bruto
     * @param  mixed $neto
     * @param  mixed $fecha
     * @param  mixed $hora
     * @param  mixed $id_plantacion
     * @return int
     */
    public function alta(float $tara, float $bruto, float $neto, string $fecha, string $hora, int $id_plantacion): int {
        return $this -> repository -> alta($tara, $bruto, $neto, $fecha, $hora, $id_plantacion);
    }
    
    /**
     * modificar
     *
     * @param  mixed $id_entrega
     * @param  mixed $parametros
     * @return void
     */
    public function modificar(int $id_entrega, array $parametros) {
        return $this-> repository -> modificar($id_entrega, $parametros);
    }
    
    /**
     * get_ultima_entrega
     *
     * @return Entrega
     */
    public function get_ultima_entrega(): ?Entrega {
        return $this -> repository -> get_ultima_entrega();
    }
}