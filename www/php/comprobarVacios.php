<?php 

function comprobarVacios($datos) {
    foreach ($datos as $key => $dato) {
        $dato = trim($dato);
        if ($dato === "")  {
            return false;
        }
    }
    return true;
}

