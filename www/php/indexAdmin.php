<?php
require_once "./db/productos.php";
require "./db/clientes.php";
require "./db/comerciantes.php";
require "./db/categorias.php";


$productos = consultarProductosAdmin();
$clientes = getClientes();
$comerciantes = getComerciantes();
$categorias = getCategorias();

/**
 * Performs the specified action based on the value of $action.
 *
 * @param string $action The action to perform.
 */
function realizarAccion($accion){
    switch ($accion) {
        case 'borrarProducto':
            borrarProductoId($_GET["id"]);
            break;
        case 'borrarCliente':
            borrarClienteId($_GET["id"]);
            break;
        case 'borrarComerciante':
            borrarComercianteId($_GET["id"]);
            break;
        case 'borrarCategoria':
            borrarCategoriaId($_GET["id"]);
            break;
        case 'insertar':
            insertarCategoria($_POST["nombreCategoria"]);
            break;
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

if (isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}
if (isset($_POST["accion"])) {
    $accion = $_POST["accion"];
    realizarAccion($accion);
}
require("views/index.viewAdmin.php");
