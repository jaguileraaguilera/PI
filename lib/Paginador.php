<?php
namespace lib;

/**
 * Paginador
 */
class Paginador {
    public array $datos;
    public array $particiones; 
    public int $items_vista;
    public int $num_paginas;
    
    /**
     * __construct
     *
     * @param  mixed $datos
     * @param  mixed $items_vista
     * @return void
     */
    function __construct($datos, $items_vista) {
        $this -> items_vista = $items_vista;
        $this -> particiones = array_chunk($datos, $items_vista);
        $this -> num_paginas = count($this -> particiones);
    }
}