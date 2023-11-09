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

function select($sentencia, $objeto) {
    global $conn;
    $stmt = $conn->prepare($sentencia);
    if (is_array($objeto)) {
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
    if (is_array($objeto)) {
        $result = $stmt->execute($array); // si el false $st->errorInfo()[2]   si da error hacer un throw
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
    $stmt = $conn->prepare("SELECT * FROM Clientes where ID = 1");
    $stmt->execute();
    return $stmt;
}
