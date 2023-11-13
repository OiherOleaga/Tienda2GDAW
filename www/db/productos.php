<?php
require_once __DIR__ . "/baseDeDatos.php";

function consultarProductos() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Productos");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}