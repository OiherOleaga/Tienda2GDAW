<?php
$conn = connect();

function connect()
{
    global $conn;
    $host = "db";
    $dbname = "tienda";
    $user = "root";
    $password = "test";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        return $conn;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function closeCon() {
    global $conn;
    $conn = null;
}

function consultarProductos()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Productos");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function select ($select, $arrayDatos = null) {
    global $conn;
    $stmt = $conn->prepare($select);
    $stmt->execute($arrayDatos);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


