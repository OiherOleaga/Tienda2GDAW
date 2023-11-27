<?php
/**
 * Checks if the session cookie is set and redirects the user accordingly.
 *
 * If the session cookie is set:
 * - If "idProducto" is set in the GET parameters, redirects to the product page with the specified ID.
 * - If "idProducto" is not set, redirects to the home page.
 *
 * @param array $_GET The GET parameters in the current request.
 */
if (isset($_COOKIE[session_name()])) {
    if (isset($_GET["idProducto"])) {
        header("Location: /producto?idProducto=" . $_GET["idProducto"]);
    } else {
        header("Location: /");
    }
    exit;
}

require "methods.php";

$errorUsuario = "";
$errorDev = "";

/**
 * Handles the login process for clients, merchants, and administrators.
 *
 * If the request method is POST:
 * - Attempts to authenticate the user by checking credentials against client, merchant, and administrator databases.
 * - If successful, starts a session, sets session variables, and redirects the user to the specified or default location.
 *
 * @param array $_POST The POST parameters in the current request.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "./db/clientes.php";
    require "./db/comerciantes.php";
    require "./db/administradores.php";
    try {
        $datos = [
            "username" => strtoupper(POST("usuario")),
            "contrasenia" => hash('sha256', POST("password"))
        ];
        $id = getIdCliente($datos); 
        $tipo = "cliente";
        if ($id == null) {
            $tipo = "comerciante";
            $id = getIdComerciante($datos);
            if ($id == null) {
                $tipo = "administrador";
                $id = getIdAdministrador($datos);
                if ($id == null) {
                    $errorUsuario = "Nombre o contraseña incorrecto";
                    goto fin;
                }
            }
        }
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["tipo"] = $tipo;
        if (isset($_POST["otraRedirecion"])) {
            header("Location: " . $_POST["otraRedirecion"]);
        } else {
            header("Location: /");
        }
        exit;
    } catch (Exception $e) {
        $errorUsuario = "Error al iniciar sesion";
        $errorDev = $e->getMessage() . $e->getCode() . $e->getFile() . $e->getLine();
    }
    fin:
    closeCon();
}
require __DIR__ . "/views/login.view.php";