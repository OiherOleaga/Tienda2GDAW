<?php

if (isset($_COOKIE[session_name()])) {
    header("Location: /");
    exit;
}

require "exceptionControlada.php";
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
                throw new ExecptionControlada("nombre o contraseña incorrecto");
            }
        }
        closeCon();
        session_start();
        $_SESSION["id"] = $id[0]["id"]; 
        $_SESSION["tipoCliente"] = $cliente;
        header("Location: /");
        exit;
    } catch (ExecptionControlada $e) {
        closeCon();
        $errorUsuario = $e->getMessage();
    } catch (Exception $e) {
        closeCon();
        $errorUsuario = "error al iniciar sesion";
        $errorDev = $e->getMessage();
    }
}

require "./views/login.view.php";
