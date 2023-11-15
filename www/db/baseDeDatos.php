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

function select($sentencia, $objeto = null)
{
    global $conn;
    $stmt = $conn->prepare($sentencia);
    if (!is_array($objeto) && $objeto !== null) {
        $objeto = [$objeto];
    }  
    if (!$stmt->execute($objeto)) {
        throw new Exception($stmt->errorInfo()[2]);
    } 
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function execute($sentencia, $objeto = null) {
    global $conn;
    $stmt = $conn->prepare($sentencia);
    if (!is_array($objeto) && $objeto !== null) {
        $objeto = [$objeto];
    }  
    if (!$stmt->execute($objeto)) {
        throw new Exception($stmt->errorInfo()[2]);
    } 
}