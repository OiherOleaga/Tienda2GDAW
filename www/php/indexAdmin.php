<?php
require "../db/productos.php";
require "../db/clientes.php";
require "../db/comerciantes.php";
require "../db/categorias.php";
$productos= consultarProductosAdmin();
$clientes= getClientes();
$comerciantes= getComerciantes();
$categorias= getCategorias();




require("views/index.viewAdmin.php");