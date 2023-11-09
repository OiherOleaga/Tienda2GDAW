<?php
require("php/baseDeDatos.php");

$productos = consultarProductos();

if (isset($_COOKIE[session_name()])) {
    session_start();
    $id = $_SESSION['id'];
    $tipo = $_SESSION['tipoCliente'];
    if ($tipo) {
        $data = ["id" => $id];
        $cliente = getCliente($data);
    } else {
        $cliente = getCliente($data);
    }
}




require("php/views/index.viewUsuario.php");
