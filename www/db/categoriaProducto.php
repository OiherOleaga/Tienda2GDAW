<?php
require_once __DIR__ . "/baseDeDatos.php";

function insertCategoriaProducto($categorias, $idProducto) {
    if (count($categorias) > 0) {
        $insert = "INSERT INTO Categorias_Productos VALUES ";
        $datos = ["idProducto" => $idProducto];

        foreach ($categorias as $index => $categoria) {
            $insert .= "\n(:cat$index, :idProducto),";
            $datos["cat$index"] = $categoria;
        }
        execute(substr($insert, 0, -1), $datos);
    }
}

function deleteCategoriaProducto($categorias, $idProducto) {
    if (count($categorias) > 0) {
        $delete = "DELETE FROM Categorias_Productos WHERE ";
        $datos = ["idProducto" => $idProducto];

        foreach ($categorias as $index => $categoria) {
            $delete .= "\n (id_categorias = :cat$index AND id_producto = :idProducto) OR"; 
            $datos["cat$index"] = $categoria;
        }
        execute(substr($delete, 0, -2), $datos);
    }
}