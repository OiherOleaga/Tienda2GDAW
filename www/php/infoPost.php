<?php

require "php/preparacionUsuario.php";
try {
    $usuario = preparacionUsuarioUpdate("cliente", $mensajeUsuario);
    if ($usuario != null) {
        require_once "db/usuarios.php";
        updateUsuario($usuario, $cliente["ID"], "Clientes");
        $mensajeUsuario = "Datos actualizados correctamente";
        foreach ($usuario as $key => $valor) {
            $cliente[($key == "username" ? $key : ucfirst($key))] = $valor;
        }
    }
} catch (Exception $e) {
    $errorUsuario = "error al cambair los datos";
    $errorDev = $e->getMessage();
}