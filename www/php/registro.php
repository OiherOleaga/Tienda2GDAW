<?php

if (isset($_COOKIE[session_name()])) {
    header("Location: /");
    exit;
}

// TODO poner el el local sotrage el tipo de usuario que a iniciado y la foto 
// que en los inputs apareza que campo es en otro sitio
require_once "methods.php";
$errorDev = "";
$errorUsuario = "";
$usuario = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "./php/preparacionUsuario.php";
    try {
        $tipo = POST("tipo");
        $usuario = preparacionUsuario($tipo, $errorUsuario);
        if ($errorUsuario == "") {
            $usuario["contrasenia"] = hash("sha256" , POST("contrasenia"));
            if ($tipo == "cliente") {
                require_once "./db/clientes.php";
                insertarCliente($usuario);
                session_start();
                $_SESSION["id"] = getIdCliente(["username" => $usuario["username"], "contrasenia" => $usuario["contrasenia"]]);
                $_SESSION["tipo"] = $tipo;
            } else if ($tipo == "comerciante") {
                require_once "./db/comerciantes.php";
                insertarComerciante($usuario);
                session_start();
                $_SESSION["id"] = getIdComerciante(["username" => $usuario["username"], "contrasenia" => $usuario["contrasenia"]]);
                $_SESSION["tipo"] = $tipo;
            }
            closeCon();
            header("Location: /");
            exit;
        }
    } catch (Exception $e) {
        $errorUsuario = "Error al registrar";
        $errorDev = $e->getMessage() . $e->getCode() . $e->getFile() . $e->getLine();
    }
    closeCon();
}

require "views/registro.view.php";

