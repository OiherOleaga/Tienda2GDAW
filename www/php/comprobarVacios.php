<?php 

/**
 * Check if any values in the provided data array are empty or only contain whitespace.
 *
 * @param array $datos The data array to be checked.
 *
 * @return bool Returns true if no values are empty or contain only whitespace; otherwise, returns false.
 */
function comprobarVacios($datos) {
    foreach ($datos as $key => $dato) {
        $dato = trim($dato);
        if ($dato === "")  {
            return false;
        }
    }
    return true;
}

