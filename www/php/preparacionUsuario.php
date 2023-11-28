<?php 

/**
 * Prepares client data for insertion or update and performs necessary checks.
 *
 * @param array $usuario The client data to be prepared.
 * @param string $errorUsuario The error message for user feedback (passed by reference).
 *
 * @return array The prepared client data.
 */
function preparacionCliente($usuario, &$errorUsuario) {
    require_once "./db/clientes.php";
    require_once "php/comprobarVacios.php";
    require_once "php/descargarImagen.php";

    if (isset($usuario["avatar"])) {
        $usuario["avatar"] = descargarAvatar($usuario["id"], $usuario["avatar"], "cliente");
    }

    if (!comprobarVacios($usuario)) {
        $errorUsuario = "No puede haber ningun campo vacio";
    }

    return $usuario;
}

/**
 * Prepares merchant data for insertion or update and performs necessary checks.
 *
 * @param array $usuario The merchant data to be prepared.
 * @param string $errorUsuario The error message for user feedback (passed by reference).
 *
 * @return array The prepared merchant data.
 */
function preparacionComerciante($usuario, &$errorUsuario) {
    require_once "./db/comerciantes.php";
    require_once "php/comprobarVacios.php";
    require_once "php/descargarImagen.php";

    if (isset($usuario["avatar"])) {
        $usuario["avatar"] = descargarAvatar($usuario["id"], $usuario["avatar"], "comerciante");
    }

    if (!comprobarVacios($usuario)) {
        $errorUsuario = "No puede haber ningun campo vacio";
    }

    return $usuario;
}

/**
 * Prepares user data for insertion based on the user type (client or merchant) and performs necessary checks.
 *
 * @param string $tipo The type of user ("cliente" or "comerciante").
 * @param string $errorUsuario The error message for user feedback (passed by reference).
 *
 * @return array|null The prepared user data if successful, or null on failure.
 */
function preparacionUsuarioInsert($tipo, &$errorUsuario) {
    require_once "methods.php";
    require_once "./db/usuarios.php";

    $usuario = [
        "username" => POST("username"),
        "correo" => POST("correo"),
        "telefono" => POST("telefono")
    ];

    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $usuario["correo"])) {
        $errorUsuario = "Email formato incorrecto";
        return null;
    }

    if (!preg_match("/^[0-9]{9}$/", trim($usuario["telefono"]))) {
        $errorUsuario = "Telefono formato incorrecto";
        return null;
    }
    
    $coincidencias = comprobarDatosUnicos($usuario);

    if ($coincidencias != null) {
        foreach ($coincidencias as $row) {
            $coincidencia = $row['coincidencia'];
            $errorUsuario .= "El " . ($coincidencia == "username"? "nombre de usuario/nombre de empresa" : $coincidencia) . " " . $usuario[$coincidencia] . " ya esta en uso<br>";
        }
        return null;
    }

    $usuario["direccion"] = POST("direccion");
    $usuario["avatar"] = POST("avatar");
    $usuario["contrasenia"] = hash("sha256" , POST("contrasenia"));

    switch($tipo) {
        case "cliente":
            $usuario["nombre"] = POST("nombre");
            $usuario["apellidos"] = POST("apellidos");
            $usuario["id"] = getMaxIdCliente();
            return preparacionCliente($usuario, $errorUsuario);
        case "comerciante":
            $usuario["id"] = getMaxIdComerciantes();
            return preparacionComerciante($usuario, $errorUsuario);
    }    
}

/**
 * Prepares user data for update based on the user type (client or merchant) and performs necessary checks.
 *
 * @param string $tipo The type of user ("cliente" or "comerciante").
 * @param string $errorUsuario The error message for user feedback (passed by reference).
 *
 * @return array|null The prepared user data if successful, or null on failure.
 */
function preparacionUsuarioUpdate($tipo, &$errorUsuario) {
    require_once "methods.php";
    $usuario = [];
    postAddArray($usuario, "avatar"); 
    postAddArray($usuario, "username"); 
    postAddArray($usuario, "correo");
    postAddArray($usuario, "telefono");
    postAddArray($usuario, "direccion");
    $usuario["id"] = $_SESSION["id"];

    if (isset($_POST["contrasenia"]) && $_POST["contrasenia"] != "") {
        $usuario["contrasenia"] = hash("sha256", POST("contrasenia"));
    }

    if (isset($usuario["correo"]) && !preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $usuario["correo"])) {
        $errorUsuario = "Email formato incorrecto";
        return null;
    }

    if (isset($usuario["telefono"]) && !preg_match("/^[0-9]{9}$/", trim($usuario["telefono"]))) {
        $errorUsuario = "Telefono formato incorrecto";
        return null;
    }

    switch($tipo) {
        case "cliente":
            postAddArray($usuario, "nombre");
            postAddArray($usuario, "apellidos");
            return preparacionCliente($usuario, $errorUsuario);
        case "comerciante":
            return preparacionComerciante($usuario, $errorUsuario);
    }    
}