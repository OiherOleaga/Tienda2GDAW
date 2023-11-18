<?php
require "./php/methods.php";
require "./db/baseDeDatos.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT p.* FROM Productos p ";
    switch (POST_J("partida")) {
    }
    $datos = [];
    if (($search = trim(POST_J("search")))) {
        // el like lo hace ignore case
        $palabras = explode(" ", preg_replace('/\s+/', ' ', $search));
        $size = count($palabras);
        $where = "WHERE ";
        $orderBy = "ORDER BY ";
        for ($i = 0; $i < $size; $i++) {
            // empieza con aca con ...
            // las categorias que mande el id 
            // que salga antes segundo los likes
            $where .= "c.nombre_empresa LIKE :p$i OR p.titulo LIKE :p$i OR p.descripcion LIKE :p$i " . ($i < $size - 1? "OR " : "");
            $orderBy .=   "
                        CASE
                            WHEN p.titulo LIKE :p$i OR p.descripcion LIKE :p$i OR c.nombre_empresa LIKE :p$i THEN " . $size - $i . "
                            ELSE 0
                        END " . ($i < $size - 1? "+ " : "DESC");
            $datos["p$i"] = "%" . $palabras[$i] . "%";
        }
        $query .= "LEFT JOIN Comerciantes c ON p.id_comerciante = c.id " . $where . $orderBy;
        //die($query);
    }
    try {
        $producto = select($query, $datos);
        header('Content-Type: application/json');
        echo $producto? json_encode($producto) : "[false]";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    closeCon();
}