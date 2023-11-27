<?php

/**
 * Check if a session is active and retrieve user information based on the session.
 *
 * @return mixed|null Returns user information if a valid session is found; otherwise, returns null.
 */
function comprobarSesion() {
    if (isset($_COOKIE[session_name()])) {
        
        session_start();
        if (isset($_SESSION["id"]) && isset($_SESSION["tipo"])) {
            switch ($_SESSION["tipo"]) {
                case "cliente":
                    require_once "./db/clientes.php";
                    $usuario = getCliente($_SESSION["id"]);
                    break;
                case "comerciante":
                    require_once "./db/comerciantes.php";
                    $usuario = getComerciante($_SESSION["id"]); 
                    break;
            }
            if ($usuario != null) {
                return $usuario;
            }
        }
        setcookie("PHPSESSID", "", time() - 3600); 
    }
    return false;
}