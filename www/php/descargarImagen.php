<?php 

/**
 * Download and return the URL of the user's avatar based on provided parameters.
 *
 * @param int|string $id      The identifier used in generating the avatar's filename.
 * @param string      $avatar  The filename or identifier for the user's avatar.
 * @param string      $tipo    The type of user (e.g., "cliente" or "comerciante").
 *
 * @return string The URL of the user's avatar.
 */
function descargarAvatar($id, $avatar, $tipo) {
    if ($avatar == "") {
        $urlAvatar = "./assets/avatares/fotoPerfil.jpg";
    } else {
        $id = $id == ""? 0 : $id + 1;
        $urlAvatar = descargarImagen($avatar, "/assets/avatares/" . hash("sha256" , "$tipo asldfjkasl$id"));
    }
    return $urlAvatar;
}

/**
 * Download and save an image, returning its URL based on provided parameters.
 *
 * @param string $img   The base64-encoded image data.
 * @param string $ruta  The directory or path where the image will be saved.
 *
 * @return string The URL of the saved image.
 */
function descargarImagen($img, $ruta) {
    if ($img != "") {
        $url = $ruta . "." . analizarImg($img);
        file_put_contents(".$url", base64_decode($img));
    }
    return $url;
}

/**
 * Download and save multiple product photos, returning their URLs.
 *
 * @param array  $fotos          An array containing base64-encoded image data for each photo.
 * @param string $idProducto     The identifier for the product.
 * @param string $idComerciante  The identifier for the merchant associated with the product.
 *
 * @return array The array containing URLs of the saved product photos.
 */
function descargarFotoProducto($fotos, $idProducto, $idComerciante) {
    $idProducto = $idProducto == ""? 0 : $idProducto + 1;

    foreach ($fotos as $key => $foto) {
        $fotos[$key] = descargarImagen($foto, "/assets/producto/" . hash("sha256" , "$idComerciante $idProducto asldfjkasl$key"));
    }
    return $fotos;
}

/**
 * Extract and return the file extension of a base64-encoded image.
 *
 * @param string $img The base64-encoded image data.
 *
 * @return string The file extension of the image.
 *
 * @throws Exception If the image format is incorrect.
 */
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