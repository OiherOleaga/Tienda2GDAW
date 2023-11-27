<?php

function comprobarSesion()
{
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
                case "administrador":
                    require_once "./db/administradores.php";
                    $usuario = getAdministrador($_SESSION["id"]);
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
