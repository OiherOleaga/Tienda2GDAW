<?php
function consultarEmpresa($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Comerciantes WHERE ID= :id");
    $stmt->execute($data);
    $empresa = $stmt->fetch(PDO::FETCH_ASSOC);
    return $empresa;
}