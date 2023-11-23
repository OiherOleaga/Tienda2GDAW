<?php
require "../db/productos.php";
require "../db/clientes.php";
require "../db/comerciantes.php";
require "../db/categorias.php";


$productos= consultarProductosAdmin();
$clientes= getClientes();
$comerciantes= getComerciantes();
$categorias= getCategorias();

function realizarAccion($accion){
    switch ($accion) {
        case 'borrarProducto':
            borrarProductoId($_GET["id"]);
            break;
        case 'borrarCliente':
            
            break;
        
    }
}


if (isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}
require("views/index.viewAdmin.php");