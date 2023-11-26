<?php

require_once __DIR__ . "/baseDeDatos.php";

function getCategorias()
{
    return select("SELECT c.*, count(cp.id_producto) as numeroProdcutos 
                   FROM Categorias c 
                    LEFT JOIN Categorias_Productos cp ON cp.id_categorias = c.id
                    GROUP BY c.id");
}

function getCategoriasProducto($idProducto) {
    return select("SELECT c.*, cp.id_producto as checked
                   FROM Categorias c 
                   LEFT JOIN Categorias_Productos cp ON cp.id_categorias = c.id AND cp.id_producto = ?", $idProducto); 
}

function borrarCategoriaId($id)
{
    return execute("DELETE FROM Categorias WHERE ID=?", $id);
}       

function insertarCategoria($nombre)
{
    return execute("INSERT INTO Categorias (Nombre) VALUES ('?')", $nombre);
}