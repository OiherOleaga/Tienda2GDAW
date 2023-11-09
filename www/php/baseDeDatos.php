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

function closeCon()
{
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

function Select($sentencia, $objeto)
{
    global $conn;
    $stmt = $conn->prepare($sentencia);
    $stmt->execute($objeto);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCliente($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Clientes where ID = :id");
    $stmt->execute($data);
    return $stmt->setFetchMode(PDO::FETCH_OBJ);
}
