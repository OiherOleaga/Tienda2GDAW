<?php

if (isset($_COOKIE[session_name()])) {
    header("Location: /");
    exit;
}

require "methods.php";
$errorDev = "";
$errorUsuario = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        require "../db/usuarios.php";
        // TODO hacer las comprovaciones tambien las de js
            require "../db/clientes.php";
        $usuario = [
            "username" => POST("username"),
            "correo" => POST("correo"),
            "telefono" => POST("telefono")
        ];
        $coincidencias = comprobarDatosUnicos($usuario);
        if ($coincidencias != null) {
            foreach ($coincidencias as $row) {
                $coincidencia = $row['coincidencia'];
                $errorUsuario .= "El " . ($coincidencia == "username"? "Nombre de usuario/Nombre de empresa" : $coincidencia) . " " . $usuario[$coincidencia] . " ya esta en uso<br>";
            }
            goto fin;
        }
        $usuario["contrasenia"] = hash("sha256" , POST("contrasenia"));
        $usuario["direccion"] = POST("direccion");
        $avatar = POST("avatar");
        $tipo = POST("tipo");

        if ($tipo == "cliente") {
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
            $_SESSION["id"] = getIdCliente(["username" => $usuario["username"], "contrasenia" => $usuario["contrasenia"]]);
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
            $_SESSION["id"] = getIdComerciante(["username" => $usuario["username"], "contrasenia" => $usuario["contrasenia"]]);
            $_SESSION["tipoCliente"] = false;
        }
        header("Location: /");
        exit;
    } catch (Exception $e) {
        $errorUsuario = "Error al registrar";
        $errorDev = $e->getMessage() . $e->getCode() . $e->getFile() . $e->getLine();
    }
    fin:
    closeCon();
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
