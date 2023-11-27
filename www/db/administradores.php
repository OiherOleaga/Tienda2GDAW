<?php

function getIdAdministrador($datos)
{
    $id = select("select id from Administradores where nombre = upper(:username) and contrasenia = :contrasenia", $datos);
    return $id == null ? $id : $id[0]["id"];
}


function getAdministrador($id)
{
    $admin = select("SELECT * FROM Administradores WHERE ID = ?", $id);
    return $admin == null ? $admin : $admin[0];
}
