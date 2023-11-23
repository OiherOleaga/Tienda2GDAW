<?php

require_once __DIR__ . "/baseDeDatos.php";

function insertFotoProducto($fotos, $idProducto) {
    $datos = [
        "idProducto" => $idProducto
    ];

    $insert = "INSERT INTO Foto_producto (id_producto, url) VALUES ";

    for ($i = 0; $i < count($fotos); $i++) {
        $insert .= "\n (:idProducto, :foto$i)";
        $datos["foto$i"] = $fotos[$i];
    }

    execute($insert, $datos);
}

