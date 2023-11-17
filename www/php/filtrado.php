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
        $query .= "LEFT JOIN Comerciantes c ON ";
        for ($i = 0; $i < $size; $i++) {
            $query .= "c.nombre_empresa LIKE :p$i " . ($i < $size - 1? "OR " : "");
            $datos["p$i"] = "%" . $palabras[$i] . "%";
        }
        $query .= "WHERE p.id_comerciante = c.id OR "; 
        for ($i = 0; $i < $size; $i++) {
            $query .= "p.titulo LIKE :p$i OR p.descripcion LIKE :p$i " . ($i < $size - 1? "OR " : "");
        }
        /*$query .= "ORDER BY ";
        for ($i = 0; $i < $size; $i++) {
            $query .=   "
                        CASE
                            WHEN p.titulo LIKE :p$i OR p.descripcion LIKE :p$i THEN $i
                            ELSE ". $i + 1 . "
                        END " . ($i < $size - 1? ", " : "");
        }*/
        die($query);
    }
    try {
        $producto = select($query, $datos);
        header('Content-Type: application/json');
        echo $producto? json_encode($producto) : "[false]";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}