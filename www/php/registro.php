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
    //try {
        $usuario = [
            "username" => POST("username"),
            "contrasenia" => hash("sha256" , POST("contrasenia")), 
            "correo" => POST("correo"),
            "telefono" => POST("telefono"),
            "direccion" => POST("direccion")
        ];
        $avatar = POST("avatar");
        $tipo = POST("tipo");

        if ($tipo == "cliente") {
            // TODO hacer todas las comprovaciones
            require "../db/clientes.php";
            if ($avatar == "") {
                $urlAvatar = "/assets/avatares/fotoPerfil.jpg";
            } else {
                $id = getMaxIdClientes();
                $id = $id == ""? 0 : $id + 1;
                $urlAvatar = "/assets/avatares/" . hash("sha256" , "cliente_asldfjkasl$id") . "." . analizarImg($avatar);
                file_put_contents("..$urlAvatar", base64_decode($avatar));
            }

            $usuario["avatar"] = $urlAvatar;
            $usuario["nombre"] = POST("nombre");
            $usuario["apellidos"] = POST("apellidos");

            insertarCliente($usuario);
            session_start();
            $_SESSION["id"] = getIdCliente($usuario);
            $_SESSION["tipoCliente"] = true;
        } else if ($tipo == "comerciante") {
            require "../db/comerciantes.php";
            if ($avatar == "") {
                $urlAvatar = "/assets/avatares/fotoPerfil.jpg";
            } else {
                $id = getMaxIdComerciantes();
                $id = $id == ""? 0 : $id + 1;
                $urlAvatar = "/assets/Logo/" . hash("sha256" , "comerciante_asldfjkasl$id") . "." . analizarImg($avatar);
                file_put_contents("..$urlAvatar", base64_decode($avatar));
            }

            $usuario["avatar"] = $urlAvatar;

            insertarComerciante($usuario);
            session_start();
            $_SESSION["id"] = getIdComerciante($usuario);
            $_SESSION["tipoCliente"] = false;
        }
        
        closeCon();
        header("Location: /");
        exit;
    /*} catch (ExcptionControlada $e) {
        closeCon();
        $errorUsuario = $e->getMessage();
    } catch (Exception $e) {
        closeCon();
        $errorUsuario = "Error al registrar";
        $errorDev = $e->getMessage();
    }*/
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
