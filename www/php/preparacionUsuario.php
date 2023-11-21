<?php 

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

function preparacionUsuario($tipo, &$errorUsuario) {
    require_once "./db/usuarios.php";
    require_once "./db/comerciantes.php";
    require_once "./db/clientes.php";
    require_once "methods.php";

    $usuario = [
        "username" => POST("username"),
        "correo" => POST("correo"),
        "telefono" => POST("telefono")
    ];

    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $usuario["correo"])) {
        $errorUsuario = "Email formato incorrecto";
        goto fin;
    }
    
    if (!preg_match("/^[0-9]{9}$/", trim($usuario["telefono"]))) {
        $errorUsuario = "Telefono formato incorrecto";
        goto fin;
    }

    $coincidencias = comprobarDatosUnicos($usuario);
    if ($coincidencias != null) {
        foreach ($coincidencias as $row) {
            $coincidencia = $row['coincidencia'];
            $errorUsuario .= "El " . ($coincidencia == "username"? "nombre de usuario/nombre de empresa" : $coincidencia) . " " . $usuario[$coincidencia] . " ya esta en uso<br>";
        }
        goto fin;
    }
    $usuario["direccion"] = POST("direccion");
    if (isset($_POST["avatar"])) {
        if ($_POST["avatar"] == "") {
            $urlAvatar = "./assets/avatares/fotoPerfil.jpg";
        }
    }

    if ($tipo == "cliente") {
        if ($avatar == "") {
        } else {
            $id = getMaxIdClientes();
            $id = $id == ""? 0 : $id + 2;
            $urlAvatar = "/assets/avatares/" . hash("sha256" , "cliente_asldfjkasl$id") . "." . analizarImg($avatar);
            file_put_contents(".$urlAvatar", base64_decode($avatar));
        }
        
        $usuario["nombre"] = POST("nombre");
        $usuario["apellidos"] = POST("apellidos");
        $usuario["avatar"] = $urlAvatar;

        if (!comprobarVacios($usuario)) {
            $errorUsuario = "No puede haber ningun campo vacio";
        }
    } else if ($tipo == "comerciante") {
        if ($avatar == "") {
            $urlAvatar = "/assets/avatares/fotoPerfil.jpg";
        } else {
            $id = getMaxIdComerciantes();
            $id = $id == ""? 0 : $id + 1;
            $urlAvatar = "/assets/Logo/" . hash("sha256" , "comerciante_asldfjkasl$id") . "." . analizarImg($avatar);
            file_put_contents(".$urlAvatar", base64_decode($avatar));
        }

        $usuario["avatar"] = $urlAvatar;

        if (!comprobarVacios($usuario)) {
            $errorUsuario = "No puede haber ningun campo vacio";
        }
    } else {
        $errorUsuario = "Tipo usuario incorrecto";
    }
    fin:
    return $usuario;
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