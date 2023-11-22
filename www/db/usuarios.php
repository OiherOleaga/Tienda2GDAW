<?php 

require_once __DIR__ . "/baseDeDatos.php";

function comprobarDatosUnicos($datos) {
    return select(
        "SELECT 
            CASE 
                WHEN upper(username) = upper(:username) THEN 'username' 
                WHEN telefono = :telefono THEN 'telefono' 
                WHEN correo = :correo THEN 'correo'
            END AS coincidencia 
        FROM Clientes 
            WHERE Telefono = :telefono OR correo = :correo OR upper(username) = upper(:username)
        UNION 
        SELECT 
            CASE 
                WHEN upper(Nombre_empresa) = upper(:username) THEN 'username' 
                WHEN telefono = :telefono THEN 'telefono' 
                WHEN correo = :correo THEN 'correo'      
            END AS coincidencia 
        FROM Comerciantes 
            WHERE Telefono = :telefono OR correo = :correo OR upper(Nombre_empresa) = upper(:username)"
                , $datos);
}

function comprobarUsernameUnico() {

}

function comprobarEmailUnico() {

}

function comprobarTelefonoUnico() {

}
