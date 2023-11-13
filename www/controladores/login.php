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
    require "baseDeDatos.php";
    try {
        $username = strtoupper(POST("usuario"));
        $password = /*hash('sha250',*/ POST("password");//);
        
        $id = select("select id from Clientes where username = upper(?) and contrasenia = ?", [$username, $password]);
        $cliente = true;
        if ($id == null) {
            $cliente = false;
            $id = select("select id from Comerciantes where nombre_empresa = upper(?) and contrasenia = ?", [$username, $password]);
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
