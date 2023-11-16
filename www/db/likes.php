<?php

require_once __DIR__ . "/baseDeDatos.php";

function insertLike($idCliente, $idProducto) {
    execute("INSERT INTO Likes (id_cliente, id_producto) VALUES (?, ?)", [$idCliente, $idProducto]);
}

function deleteLike($idCliente, $idProducto) {
    execute("DELETE FROM Likes WHERE id_cliente = ? AND id_producto = ?", [$idCliente, $idProducto]);
}

function getLike($idCliente, $idProducto) {
    return select("SELECT count(*) as 'like' FROM Likes where id_cliente = ? AND id_producto = ?", [$idCliente, $idProducto])[0]["like"];
}