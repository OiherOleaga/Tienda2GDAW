<?php

require_once __DIR__ . "/baseDeDatos.php";

function getIdComerciante($datos) {
    $id = select("select id from Comerciantes where nombre_empresa = upper(:username) and contrasenia = :contrasenia", $datos);
    return $id == null? $id : $id[0]["id"];
}

function insertarComerciante($datos) {
    execute("insert into Comerciantes (avatar, nombre_empresa, contrasenia, correo, telefono, direccion)" .
                "values (:avatar, :username, :contrasenia, :correo, :telefono, :direccion)", $datos);
}


function getMaxIdComerciantes() {
    return select("select max(id) as id from Comerciantes")[0]["id"];
}

function getComerciante($id) {
    return select("SELECT * FROM Comerciantes WHERE id = ?", $id)[0];
}

function updateComerciante($datos, $id) {
    $query = "UPDATE Comerciantes SET ";

    foreach ($datos as $key => $dato) {
        $query .= "$key = :$key,";
    }

    $datos["id"] = $id;
//    die($query);
    if (count($datos) > 1) {
        execute(substr($query, 0, -1) . " WHERE id = :id", $datos);
    }
}