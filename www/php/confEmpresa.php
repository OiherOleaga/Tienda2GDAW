<?php
/**
 * Check if a session cookie is set and display the appropriate header.
 */
require("./db/comerciante.php");
if (isset($_COOKIE[session_name()])) {
    session_start();
    $id = $_SESSION["id"];
    $data = ['id' => $id];
    $cliente = getCliente($data);
    require("views/partials/headUsuario.php");
} else require("views/partials/headInicio.php");


$empresa = getComerciante($_GET["idEmpresa"]);
require "views/confEmpresa.view.php";
