<?php

require_once __DIR__ . "/baseDeDatos.php";

function insertFotoProducto($fotos, $idProducto) {
    if (count($fotos) > 0) {
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
}

function updateFotoProducto($fotos, $idProducto) {
    $datos = [
        "idProducto" => $idProducto,
    ];

    foreach ($fotos as $foto) {
        $datos["url"] = $foto["url"];
        $datos["idFotoProducto"] = $foto["idFotoProducto"];
        execute("UPDATE Fotos_producto SET url = :url WHERE id_producto = :idProducto AND id = :idFotoProducto", $datos);
    }
}

function borrarFotosProducto($id) {
    execute("DELETE FROM Fotos_producto WHERE id_producto = ?", $id);
}

function getFotosProducto($idProducto) {
    return select("SELECT id, url FROM Fotos_producto WHERE id_producto = ?", $idProducto);
}