<?php

require "php/preparacionUsuario.php";
/**
 * Updates client information in the database.
 *
 * @param array $cliente The array containing client information.
 * @param string $mensajeUsuario The message to display for user feedback.
 * @param string $errorUsuario The error message for user feedback (if any).
 * @param string $errorDev The detailed error message for developers (if any).
 */
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