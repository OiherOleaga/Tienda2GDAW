<?php

if (isset($_COOKIE[session_name()])) {
    if (isset($_GET["idProducto"])) {
        header("Location: /producto?idProducto=" . $_GET["idProducto"]);
    } else {
        header("Location: /");
    }
    exit;
}

require "methods.php";

$errorUsuario = "";
$errorDev = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "./db/clientes.php";
    require "./db/comerciantes.php";
    try {
        $datos = [
            "username" => strtoupper(POST("usuario")),
            "contrasenia" => hash('sha256', POST("password"))
        ];
        $id = getIdCliente($datos); 
        $tipo = "cliente";
        if ($id == null) {
            $tipo = "comerciante";
            $id = getIdComerciante($datos);
            if ($id == null) {
                $errorUsuario = "Nombre o contraseña incorrecto";
                goto fin;
            }
        }
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["tipo"] = $tipo;
        if (isset($_POST["otraRedirecion"])) {
            header("Location: " . $_POST["otraRedirecion"]);
        } else {
            header("Location: /");
        }
        exit;
    } catch (Exception $e) {
        $errorUsuario = "Error al iniciar sesion";
        $errorDev = $e->getMessage() . $e->getCode() . $e->getFile() . $e->getLine();
    }
    fin:
    closeCon();
}
require __DIR__ . "/views/login.view.php";