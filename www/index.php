<?php
require("php/baseDeDatos.php");

$cliente= getCliente();
$productos = consultarProductos();

require("php/views/index.viewUsuario.php");