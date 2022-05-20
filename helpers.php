<?php

function quitar_guiones($cad) {
    $formateada = '';

    for ($i = 0; $i < strlen($cad); $i++) {
        if ($cad[$i] == '_') {
            $formateada .= ' ';
        }
        else {
            $formateada .= $cad[$i];
        }
    }

    return $formateada;
}

function formatear_cabecera($cabecera) {
    if ($cabecera == 'password') {
        return 'Contraseña';
    }
    elseif ($cabecera == 'dni') {
        return strtoupper($cabecera);
    }
    elseif ($cabecera == 'anio') {
        return 'Año';
    }
    else {
        return quitar_guiones(ucfirst($cabecera));
    }
}

function comprobar_sesion() {
    if (session_status() != 2) {
        session_start();
    }
}

// function limpiar_errores() {
//     if (isset($_SESSION['errores'])) {
//         $_SESSION['errores'] = array();
//     }
// }