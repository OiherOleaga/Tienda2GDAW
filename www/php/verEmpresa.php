<?php
require("baseDeDatos.php");
if (isset($_COOKIE[session_name()])) {
    session_start();
    $id = $_SESSION["id"];
    $data = ['id' => $id];
    $cliente = getCliente($data);
    require("views/partials/headUsuario.php");
} else require("views/partials/headInicio.php");

require "views/verEmpresa.view.php";
