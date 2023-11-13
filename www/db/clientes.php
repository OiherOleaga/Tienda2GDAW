<?php
require_once __DIR__ . "/baseDeDatos.php";

function insertarCliente($datos) {
    execute("insert into Clientes (avatar, username, nombre, apellidos, contrasenia, correo)" .
                "values (:avatar, :username, :nombre, :apellidos, :contrasenia, :correo)", $datos);
}

function getMaxIdCliente() {
    return select("select max(id) as id from Clientes")[0]["id"];
}