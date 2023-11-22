<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if ($uri != "/") {
    $uri = explode("/", $uri);
    $path = "./php/$uri[1].php";
    if (file_exists($path)) {
        require "$path";
    } else {
        require "./html/error-404.html";
    }
    exit;
}


require "./php/comprobarSesion.php";
require "./db/productos.php";

if (($cliente = comprobarSesion())) {
    switch ($_SESSION["tipo"]) {
        case "cliente":
            require("php/views/partials/headUsuario.php");
            break;

        case "comerciante":
            $errorDev = "";
            $mensajeUsuario = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                require "php/methods.php";
                require "php/preparacionUsuario.php";
                try {
                    $usuario = preparacionUsuario("comerciante", $mensajeUsuario);
                    if ($mensajeUsuario == "") {
                        $usuario["id"] = $_SESSION("id");
                        if (isset($_POST["contrasenia"]) && trim($_POST["contrasenia"]) != "") {
                            $usuario["contrasenia"] = $_POST["contrasenia"];
                        }

                        updateComerciante($usuario);
                        $cliente = $usuario;
                        $mensajeUsuario = "datosActualizados";
                    }
                } catch (Exception $e) {
                    $errorUsuario = "error al cambair los datos";
                    $errorDev = $e->getMessage();
                }
            }

            $productos = getProductosComerciante($cliente["ID"]);
            closeCon();
            require("php/views/partials/headUsuario.php");
            require "php/views/index.viewEmpresa.php";
            exit;
    }
} else {
    require("php/views/partials/headInicio.php");
}

$productos = consultarProductos();
closeCon();
require("php/views/index.viewUsuario.php");
