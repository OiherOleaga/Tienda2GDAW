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

function consultarProductos()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Productos");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

