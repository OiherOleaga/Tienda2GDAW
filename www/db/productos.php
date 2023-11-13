<?php
require_once __DIR__ . "/baseDeDatos.php";

function consultarProductos() {
    return select("SELECT * FROM Productos");
}

function consultarProductoID($data) {
    return select("SELECT Productos.ID as ProductoID, Productos.Titulo, Productos.Precio, Productos.Descripcion, Productos.Foto,
                            Comerciantes.ID as ComercianteID, Comerciantes.ID as idEmpresa, Comerciantes.Nombre_empresa, Comerciantes.Avatar as avatar_empresa
                            FROM Productos
                            INNER JOIN Comerciantes ON Productos.ID_Comerciante = Comerciantes.ID
                            WHERE Productos.ID = :id");
}
