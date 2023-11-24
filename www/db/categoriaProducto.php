<?php
require_once __DIR__ . "/baseDeDatos.php";

function insertCategoraiProducto($categorias, $idProducto) {
    $insert = "INSERT INTO Categorias_Productos VALUES ";
    $datos = ["idProducto" => $idProducto];

    foreach ($categorias as $index => $categoria) {
        $insert .= "\n(:cat$index, :idProducto),";
        $datos["cat$index"] = $categoria;
    }
    execute(substr($insert, 0, -1), $datos);
}