<?php

require_once __DIR__ . "/baseDeDatos.php";

function insertFotoProducto($fotos, $idProducto) {
    $datos = [
        "idProducto" => $idProducto
    ];

    $insert = "INSERT INTO Fotos_producto (id_producto, url) VALUES ";

    foreach ($fotos as $key => $foto) {
        $insert .= "\n (:idProducto, :$key),";
        $datos[$key] = $foto;
    }

    execute(substr($insert, 0, -1), $datos);
}

function borrarFotosProducto($id) {
    execute("DELETE FROM Fotos_producto WHERE id_producto = ?", $id);
}

