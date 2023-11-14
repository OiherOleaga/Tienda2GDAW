<?php

if (isset($_COOKIE[session_name()])) {
    header("Location: /");
    exit;
}

require "methods.php";

$errorUsuario = "";
$errorDev = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "../db/clientes.php";
    require "../db/comerciantes.php";
    try {
        $datos = [
            "username" => strtoupper(POST("usuario")),
            "contrasenia" => hash('sha256', POST("password"))
        ];
        $id = getIdCliente($datos); 
        $cliente = true;
        if ($id == null) {
            $cliente = false;
            $id = getIdComerciante($datos);
            if ($id == null) {
                $errorUsuario = "nombre o contraseña incorrecto";
                goto fin;
            }
        }
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["tipoCliente"] = $cliente;
        header("Location: /");
        exit;
    } catch (Exception $e) {
        $errorUsuario = "error al iniciar sesion";
        $errorDev = $e->getMessage() . $e->getCode() . $e->getFile() . $e->getLine();
    }
    fin:
    closeCon();
}
require "./views/login.view.php";
