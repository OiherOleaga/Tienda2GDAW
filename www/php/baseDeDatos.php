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

function select($sentencia, $objeto = null) {
    global $conn;
    $stmt = $conn->prepare($sentencia);
    if (is_array($objeto) || $objeto === null) {
        $stmt->execute($objeto);
    } else {
        $stmt->bindParam(1, $objeto);   
        $stmt->execute();
    }
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/*
function execute($sentencia, $objeto) {
    global $conn;
    $stmt = $conn->prepare($sentencia);
    if (is_array($objeto) || $objeto === null) {
        $result = $stmt->execute($objeto); // si el false $st->errorInfo()[2]
    } else {
        $stmt->bindParam(1, $objeto);   
        $result = $stmt->execute();
    }
    return $result;
}
*/

function getCliente()
{
    global $conn;
    $stmt = $conn->prepare("SELECT avatar FROM Clientes WHERE ID = 1");
    $stmt->execute();
    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
    return $cliente;
}
