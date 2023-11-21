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
<<<<<<< HEAD
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
=======

        if ($tipo == "cliente") {
            if ($avatar == "") {
                $urlAvatar = "../assets/avatares/fotoPerfil.jpg";
            } else {
                $id = getMaxIdClientes();
                $id = $id == ""? 0 : $id + 2;
                $tipoImg=analizarImg($avatar);
                $urlAvatar = "./assets/avatares/" . hash("sha256" , "cliente_asldfjkasl$id") . "." . $tipoImg;
                file_put_contents("$urlAvatar", base64_decode($avatar));
            }
            
            $usuario["nombre"] = POST("nombre");
            $usuario["apellidos"] = POST("apellidos");
            $urlAvatar = "/assets/avatares/" . hash("sha256" , "cliente_asldfjkasl$id") . "." . $tipoImg;
            $usuario["avatar"] = $urlAvatar;

            if (!comprobarVacios($usuario)) {
                $errorUsuario = "No puede haber ningun campo vacio";
                goto fin;
            }
            insertarCliente($usuario);
            session_start();
            $_SESSION["id"] = getIdCliente(["username" => $usuario["username"], "contrasenia" => $usuario["contrasenia"]]);
            $_SESSION["tipo"] = "cliente";
        } else if ($tipo == "comerciante") {
            require "./db/comerciantes.php";
            if ($avatar == "") {
                $urlAvatar = "/assets/avatares/fotoPerfil.jpg";
            } else {
                $id = getMaxIdComerciantes();
                $id = $id == ""? 0 : $id + 1;
                $urlAvatar = "/assets/Logo/" . hash("sha256" , "comerciante_asldfjkasl$id") . "." . analizarImg($avatar);
                file_put_contents(".$urlAvatar", base64_decode($avatar));
            }

            $usuario["avatar"] = $urlAvatar;

            if (!comprobarVacios($usuario)) {
                $errorUsuario = "No puede haber ningun campo vacio";
                goto fin;
            }
            insertarComerciante($usuario);
            session_start();
            $_SESSION["id"] = getIdComerciante(["username" => $usuario["username"], "contrasenia" => $usuario["contrasenia"]]);
            $_SESSION["tipoCliente"] = false;
        } else {
            $errorUsuario = "Tipo usuario incorrecto";
            goto fin;
>>>>>>> 28abae6ccb63527429d5fcfd54da782bb0e12a6a
        }
    } catch (Exception $e) {
        $errorUsuario = "Error al registrar";
        $errorDev = $e->getMessage() . $e->getCode() . $e->getFile() . $e->getLine();
    }
    closeCon();
}

require "views/registro.view.php";

