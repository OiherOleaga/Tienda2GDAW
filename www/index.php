<?php
require("php/baseDeDatos.php");

$productos = consultarProductos();

require("php/views/index.viewUsuario.php");