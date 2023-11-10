<?php
require("baseDeDatos.php");
if (isset($_COOKIE[session_name()])) {
    $cliente = getCliente();
    require("views/partials/headUsuario.php");
} else require("views/partials/headInicio.php");


require "views/verEmpresa.view.php";
