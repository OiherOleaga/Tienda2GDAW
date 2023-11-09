<?php

if (isset($_COOKIE[session_name()])) {
    header("Location: /");
    exit;
}

require "methods.php";
require "exceptionControlada.php";
$errorDev = "";
$errorUsuario = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "baseDeDatos.php";
    try {
        // TODO hacer todas las comprovaciones y descargar foto
        if (!execute("insert into Clientes (avatar, username, nombre, apellidos, contrasenia, correo)" .
                    "values (:avatar, :username, :nombre, :apellidos, :contrasenia, :correo)", 
                    [
                        "avatar" => , 
                        "username" => , 
                        "nombre" => , 
                        "apellidos" => , 
                        "contrasenia" => , 
                        "correo" =>
                    ]
            )) {
            throw new ExecptionControlada("fallo la insercion");
        }
        closeCon();
        session_start();
        $_SESSION["id"] = $id[0]["id"]; // ver bien ["id"]?
        $_SESSION["tipoCliente"] = $cliente;
        header("Location: /");
        exit;
    } catch (ExcptionControlada $e) {
        closeCon();
        $errorUsuario = $e->getMessage();
    } catch (Exception $e) {
        closeCon();
        $errorUsuario = "error al registrar";
        $errorDev = $e->getMessage();
    }
}

require "views/registro.view.php";
