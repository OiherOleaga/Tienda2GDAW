<?php
require("php/baseDeDatos.php");

/*session_start();
echo $_SESSION["id"];*/
$cliente= getCliente();
$productos = consultarProductos();

require("php/views/index.viewUsuario.php");