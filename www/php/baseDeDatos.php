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

function consultarProductoID($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT Productos.ID as ProductoID, Productos.Titulo, Productos.Precio, Productos.Descripcion, Productos.Foto,
                            Comerciantes.ID as ComercianteID, Comerciantes.Nombre_empresa, Comerciantes.Avatar as avatar_empresa
                            FROM Productos
                            INNER JOIN Comerciantes ON Productos.ID_Comerciante = Comerciantes.ID
                            WHERE Productos.ID = :id");
    $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
    $stmt->execute();
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);
    return $producto;
}

function select($sentencia, $objeto = null)
{
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

function getCliente($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Clientes WHERE ID = :id");
    $stmt->execute($data);
    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
    return $cliente;
}
