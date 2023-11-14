<?php

require_once __DIR__ . "/baseDeDatos.php";

function getIdComerciante($datos) {
    return select("select id from Comerciantes where nombre_empresa = upper(:username) and contrasenia = :password", $datos);
}

function insertarComerciante($datos) {
    execute("insert into Comerciantes (avatar, nombre_empresa, contrasenia, correo, telefono, direccion)" .
                "values (:avatar, :username, :contrasenia, :correo, :telefono, :direccion)", $datos);
}


function getMaxIdComerciantes() {
    return select("select max(id) as id from Comerciantes")[0]["id"];
}