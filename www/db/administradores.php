<?php

function getIdAdministrador($datos) {
    $id = select("select id from Administradores where nombre = upper(:username) and contrasenia = :contrasenia", $datos);
    return $id == null? $id : $id[0]["id"];
}