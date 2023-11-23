<?php

$empresa = $cliente;
$errorDev = "";
$mensajeUsuario = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "php/methods.php";
    require "php/preparacionUsuario.php";
    try {
        $usuario = preparacionUsuarioUpdate("comerciante", $mensajeUsuario);
        if ($usuario != null) {
            require_once "db/usuarios.php";
            if (isset($usuario["username"])) {
                $usuario["nombre_empresa"] = $usuario["username"];
                unset($usuario["username"]);
            }

            updateUsuario($usuario, $empresa["ID"], "Comerciantes");
            $mensajeUsuario = "datos actualizados";
            foreach ($usuario as $key => $valor) {
                $empresa[ucfirst($key)] = $valor;
            }
        }
    } catch (Exception $e) {
        $errorUsuario = "error al cambair los datos";
        $errorDev = $e->getMessage();
    }
}

$productos = getProductosComerciante($empresa["ID"]);
closeCon();

// header empresa
require("php/views/partials/headEmpresa.php");
require "php/views/index.viewEmpresa.php";
