<?php
namespace services;
use repositories\PlantacionRepository;
use models\Plantacion;

/**
 * PlantacionService
 */
class PlantacionService {
    private PlantacionRepository $repository;
    
    /**
     * __construct
     *
     * @return void
     */
    function __construct() {
        $this -> repository = new PlantacionRepository();
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
     * @param  mixed $id_plantacion
     * @return void
     */
    public function borrar(int $id_plantacion): void {
        $this -> repository -> borrar($id_plantacion);
    }
    
    /**
     * datos_plantacion
     *
     * @param  mixed $correo
     * @return array
     */
    public function datos_plantacion(string $correo): array {
        return $this -> repository -> datos_plantacion($correo);
    }
    
    /**
     * datos_plantacion_id
     *
     * @param  mixed $id
     * @return Plantacion
     */
    public function datos_plantacion_id(int $id): ?Plantacion {
        return $this -> repository -> datos_plantacion_id($id);
    }
    
    /**
     * alta
     *
     * @param  mixed $variedad
     * @param  mixed $anio
     * @param  mixed $zona
     * @param  mixed $id_usuario
     * @return void
     */
    public function alta(string $variedad, string $anio, int $zona, int $id_usuario) {
        return $this -> repository -> alta($variedad, $anio, $zona, $id_usuario);
    }
    
    /**
     * modificar
     *
     * @param  mixed $id_plantacion
     * @param  mixed $parametros
     * @return void
     */
    public function modificar(int $id_plantacion, array $parametros) {
        return $this-> repository -> modificar($id_plantacion, $parametros);
    }
}