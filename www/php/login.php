<?php

if (isset($_COOKIE[session_name()])) {
    header("Location: /");
    exit;
}

// sin probar
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "methods.php";
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
                throw new Exception("nombre o contraseña incorrecto");
            }
        }
        closeCon();
        session_start();
        $_SESSION["id"] = $id[0];
        $_SESSION["tipoCliente"] = $cliente;
        header("Location: /");
        exit;
    } catch (Exception $e) {
        closeCon();
        $error = $e->getMessage();
    }
}

require "./views/login.view.php";
