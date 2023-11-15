<?php
require_once __DIR__ . "/baseDeDatos.php";

function insertarCliente($datos) {
    execute("insert into Clientes (avatar, username, nombre, apellidos, contrasenia, correo, telefono, direccion)" .
                "values (:avatar, :username, :nombre, :apellidos, :contrasenia, :correo, :telefono, :direccion)", $datos);
}

function getMaxIdClientes() {
    return select("select max(id) as id from Clientes")[0]["id"];
}

function getIdCliente($datos) {
    $id = select("select id from Clientes where username = upper(:username) and contrasenia = :contrasenia", $datos);
    return $id == null? $id : $id[0]["id"];
}

function getCliente($id) {
    $cliente = select("SELECT * FROM Clientes WHERE ID = ?", $id);
    return $cliente == null? $cliente : $cliente[0];
}