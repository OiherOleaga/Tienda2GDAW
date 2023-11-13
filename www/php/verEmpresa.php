<?php
require("baseDeDatos.php");
if (isset($_COOKIE[session_name()])) {
    session_start();
    $id = $_SESSION["id"];
    $data = ['id' => $id];
    $cliente = getCliente($data);
    require("views/partials/headUsuario.php");
} else require("views/partials/headInicio.php");


$id = isset($_GET["idEmpresa"]) ? $_GET["idEmpresa"] : "";
$data = ['id' => $id];
$empresa = consultarEmpresa($data);
$productos= consultarProductos();
require "views/verEmpresa.view.php";
