<?php

if (isset($_COOKIE[session_name()])) {
    require "../db/clientes.php";
    session_start();
    if (!isset($_SESSION["id"])) {
        setcookie("PHPSESSID", "", time() - 3600); 
    }

    $cliente = getCliente($_SESSION["id"]);
    if ($cliente == null) {
        setcookie("PHPSESSID", "", time() - 3600); 
        require("views/partials/headInicio.php");
    } else {
        require("views/partials/headUsuario.php");
    }
} else require("views/partials/headInicio.php");

require("views/contact.view.php");
