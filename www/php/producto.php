<?php
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    exit;
}
require "php/methods.php";
require "./db/productos.php";

if (($producto = consultarProductoID(GET("idProducto"))) === null) {
    header("HTTP/1.1 404 Not Found");
    require "html/error-404.html";
    exit;
}
$like = false;
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
            require "db/likes.php";
            $like = getLike($_SESSION["id"], $producto["ProductoID"]);
            if (isset($_GET["like"])) {
                header('Content-Type: application/json');
                $error = "";
                try {
                    switch ($_GET["like"]) {
                        case "add":
                            if ($like) {
                                $error = "este usuario ya le ha dado like";
                                break;
                            }
                            insertLike($_SESSION["id"], $producto["ProductoID"]);
                            $error = "ok";
                            break;
                        case "remove":
                            deleteLike($_SESSION["id"], $producto["ProductoID"]);
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
                echo json_encode($res);
                exit;
            }
            require("views/partials/headUsuario.php");
            require("views/producto.view.php");
            exit;
        }
    } 
} 

if (isset($_GET["like"])) {
    header('Content-Type: application/json');
    $res = [
        "error" => "redirigir",
        "uri" => "/login?idProducto=". $producto["ProductoID"]
    ];
    die(json_encode($res));
}

require("views/partials/headInicio.php");
require("views/producto.view.php");