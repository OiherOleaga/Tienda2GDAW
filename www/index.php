<?php
require("baseDeDatos.php");
$db = connect();

$productos = getProductos($db);
echo

require("php/views/index.viewUsuario.php");
