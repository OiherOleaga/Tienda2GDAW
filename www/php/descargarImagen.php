<?php 

function descargarAvatar($id, $avatar, $tipo) {
    if ($avatar == "") {
        $urlAvatar = "./assets/avatares/fotoPerfil.jpg";
    } else {
        $id = $id == ""? 0 : $id + 1;
        $urlAvatar = descargarImagen($avatar, "/assets/avatares/" . hash("sha256" , "$tipo asldfjkasl$id"));
    }
    return $urlAvatar;
}

function descargarImagen($img, $ruta) {
    if ($img != "") {
        $url = $ruta . "." . analizarImg($img);
        file_put_contents(".$url", base64_decode($img));
    }
    return $url;
}

function descargarFotoProducto($fotos, $idProducto, $idComerciante) {
    $idProducto = $idProducto == ""? 0 : $idProducto + 1;

    foreach ($fotos as $key => $foto) {
        $fotos[$key] = descargarImagen($foto, "/assets/producto/" . hash("sha256" , "$idComerciante $idProducto asldfjkasl$key"));
    }
    return $fotos;
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