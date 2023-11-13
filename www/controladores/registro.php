<?php

if (isset($_COOKIE[session_name()])) {
    header("Location: /");
    exit;
}

require "exceptionControlada.php";
require "methods.php";
$errorDev = "";
$errorUsuario = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $tipo = POST("tipo");
        if ($tipo == "cliente") {
            require "../db/clientes.php";
            // TODO hacer todas las comprovaciones
            $avatar = POST("avatar");
            if ($avatar == "") {
                $urlAvatar = "/assets/fotoPerfil.jpg";
            } else {
                $id = getMaxIdCliente();
                $urlAvatar = "/assets/" . hash("sha256" , "cliente" . ($id == ""? 0 : $id + 1))  . "prueva." . analizarImg($avatar);
                file_put_contents("..$urlAvatar", base64_decode($avatar));
            }

            $username = POST("username");
            $nombre = POST("nombre");
            $apellido = POST("apellidos");
            $contrasenia = POST("contrasenia");
            $correo = POST("correo");

            insertarCliente([
                "avatar" => $urlAvatar, 
                "username" => $username, 
                "nombre" => $nombre, 
                "apellidos" => $apellido, 
                "contrasenia" => $contrasenia, 
                "correo" => $correo
            ]);
        }

        closeCon();
        session_start();
        $_SESSION["id"] = $id + 1; 
        $_SESSION["tipoCliente"] = $tipo == "cliente" ? true : false;
        header("Location: /");
        exit;
    } catch (ExcptionControlada $e) {
        closeCon();
        $errorUsuario = $e->getMessage();
    } catch (Exception $e) {
        closeCon();
        $errorUsuario = "Error al registrar";
        $errorDev = $e->getMessage();
    }
}

function analizarImg(&$img) {
    $extension = "";
    if ($img[10] != "/") {
        throw new Exception("formato imagen incorrecto");
    }
    for ($i = 11; $i < 23; $i++) {
        if ($img[$i] == ";") {
            $img = substr($img, $i + 8);
            return $extension;
        }
        $extension .= $img[$i];
    }
    throw new Exception("formato imagen incorrecto");
}
require "views/registro.view.php";
