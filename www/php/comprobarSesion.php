<?php

function comprobarSesion() {
    if (isset($_COOKIE[session_name()])) {
        require_once "./db/clientes.php";
        
        session_start();
        if (isset($_SESSION["id"])) {
            $cliente = getCliente($_SESSION["id"]);
            if ($cliente != null) {
                return $cliente;
            }
        }
        setcookie("PHPSESSID", "", time() - 3600); 
    }
    return false;
}