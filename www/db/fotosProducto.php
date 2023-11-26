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

function updteFotoProducto($fotos, $idProducto) {
    $datos = [
        "idProducto" => $idProducto
    ];

    foreach ($fotos as $foto) {
        // esto puede ser una insert
        $datos["foto"] = $foto;
        execute("UPDATE Fotos_producto SET url = :foto WHERE id_producto = :idProducto", $datos);
    }
}

function borrarFotosProducto($id) {
    execute("DELETE FROM Fotos_producto WHERE id_producto = ?", $id);
}

function getFotosProducto($idProducto) {
    return select("SELECT url FROM Fotos_producto WHERE id_producto = ?", $idProducto);
}