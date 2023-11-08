<?php
function connect()
{
    $dbname = "tienda";
    $host = "localhost";
    $user = "root";
    $pass = "test";

    try {
        # MySQL
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

function getProductos($dbh)
{
    $stmt = $dbh->prepare("SELECT * FROM productos");
    $stmt->execute();

    return $stmt->fetchAll();
}
