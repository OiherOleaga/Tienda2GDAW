<?php 


function preparacionCliente($usuario, &$errorUsuario) {
    require_once "./db/comerciantes.php";
    require_once "./db/clientes.php";

    if (isset($usuario["avatar"])) {
        $usuario["avatar"] = descargarImagen(getMaxIdClientes(), $usuario["avatar"]);
    }

    if (!comprobarVacios($usuario)) {
        $errorUsuario = "No puede haber ningun campo vacio";
    }

    return $usuario;
}

function preparacionComerciante($usuario, &$errorUsuario) {
    require_once "./db/comerciantes.php";
    require_once "./db/clientes.php";

    if (isset($usuario["avatar"])) {
        $usuario["avatar"] = descargarImagen(getMaxIdComerciantes(), $usuario["avatar"]);
    }

    if (!comprobarVacios($usuario)) {
        $errorUsuario = "No puede haber ningun campo vacio";
    }

    return $usuario;
}

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
            return preparacionCliente($usuario, $errorUsuario);
        case "comerciante":
            return preparacionComerciante($usuario, $errorUsuario);
    }    
}

function preparacionUsuarioUpdate($tipo, &$errorUsuario) {
    $usuario = [];
    addUsuario($usuario, "avatar"); 
    addUsuario($usuario, "username"); 
    addUsuario($usuario, "correo");
    addUsuario($usuario, "telefono");
    addUsuario($usuario, "direccion");

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
            return preparacionCliente($usuario, $errorUsuario);
        case "comerciante":
            return preparacionComerciante($usuario, $errorUsuario);
    }    
}

function addUsuario(&$usuario, $key) {
    if (isset($_POST[$key])) {
        $usuario[$key] = $_POST[$key];
    }
}

function comprobarVacios($datos) {
    foreach ($datos as $key => $dato) {
        $dato = trim($dato);
        if ($dato === "")  {
            return false;
        }
    }
    return true;
}

function descargarImagen($id, $avatar) {
    if ($avatar == "") {
        $urlAvatar = "./assets/avatares/fotoPerfil.jpg";
    } else {
        $id = $id == ""? 0 : $id + 1;
        $urlAvatar = "/assets/Logo/" . hash("sha256" , "comerciante_asldfjkasl$id") . "." . analizarImg($avatar);
        file_put_contents(".$urlAvatar", base64_decode($avatar));
    }
    return $urlAvatar;
}

function analizarImg(&$img) {
    $extension = "";
    if ($img[10] != "/") {
        throw new Exception("Formato imagen incorrecto");
    }
    for ($i = 11; $i < 23; $i++) {
        if ($img[$i] == ";") {
            $img = substr($img, $i + 8);
            return $extension;
        }
        $extension .= $img[$i];
    }
    throw new Exception("Formato imagen incorrecto");
}
