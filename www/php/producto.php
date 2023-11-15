<?php
require "./db/productos.php";
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    exit;
}
require "./php/methods.php";

if (($producto = consultarProductoID(GET("idProducto"))) === null) {
    require "html/error-404.html";
    exit;
}


if (isset($_COOKIE[session_name()])) {
    require "./db/clientes.php";
    
    session_start();
    if (!isset($_SESSION["id"])) {
        setcookie("PHPSESSID", "", time() - 3600); 
    } else {
        $cliente = getCliente($_SESSION["id"]);
        if ($cliente == null) {
            setcookie("PHPSESSID", "", time() - 3600); 
        } else {
            if (isset($_GET["like"])) {
                // hacion de like    
                
            }
            require("views/partials/headUsuario.php");
            require("views/producto.view.php");
            exit;
        }
    } 
} 

if (isset($_GET["like"])) {
    require "html/error-404.html";
    exit;
}

require("views/partials/headInicio.php");
require("views/producto.view.php");