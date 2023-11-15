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

function consultarEmpresa($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Comerciantes WHERE ID= :id");
    $stmt->execute($data);
    $empresa = $stmt->fetch(PDO::FETCH_ASSOC);
    return $empresa;
}

function select($sentencia, $objeto = null)
{
    global $conn;
    $stmt = $conn->prepare($sentencia);
    if (is_array($objeto) || $objeto === null) {
        $stmt->execute($objeto);
    } else {
        $stmt->execute([$objeto]);
    } 
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
