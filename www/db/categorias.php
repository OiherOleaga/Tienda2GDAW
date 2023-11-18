<?php

require_once __DIR__ . "/baseDeDatos.php";

function getCategorias() {
    return select("SELECT c.*, count(cp.id_producto) as numeroProdcutos 
                   FROM Categorias c 
                    LEFT JOIN Categorias_Productos cp ON cp.id_categorias = c.id
                    GROUP BY c.id");
}