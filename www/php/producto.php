<?php
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    exit;
}
require "php/methods.php";
require "./db/productos.php";
require "./db/comerciantes.php";

if (($producto = consultarProductoID(GET("idProducto"))) === null) {
    header("HTTP/1.1 404 Not Found");
    require "html/error-404.html";
    exit;
}
$empresa=getComerciante($producto["idEmpresa"]);
$like = false;
require "./php/comprobarSesion.php";

if (($cliente = comprobarSesion())) {
    require "db/likes.php";
    $like = getLike($cliente["ID"], $producto["ProductoID"]);
    if (isset($_GET["like"])) {
        header('Content-Type: application/json');
        $error = "";
        try {
            switch ($_GET["like"]) {
                case "add":
                    if ($like) {
                        $error = "este usuario ya le a dado like";
                        break;
                    }
                    insertLike($cliente["ID"], $producto["ProductoID"]);
                    $error = "ok";
                    break;
                case "remove":
                    deleteLike($cliente["ID"], $producto["ProductoID"]);
                    $error = "ok";
                    break;
                default:
                    header("HTTP/1.1 404 Not Found");
                    $error = "404 Not Found";
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
        $res = [
            "error" => $error
        ];
        closeCon();
        die(json_encode($res));
    } 
    require("views/partials/headUsuario.php");
} else {
    if (isset($_GET["like"])) {
        header('Content-Type: application/json');
        $res = [
            "error" => "redirigir",
            "uri" => "/login?idProducto=". $producto["ProductoID"]
        ];
        die(json_encode($res));
    }

    require("views/partials/headInicio.php");
}
closeCon();
require("views/producto.view.php");