<?php
require "./php/methods.php";
require "./db/baseDeDatos.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT * FROM Productos ";
    switch (POST_J("partida")) {
    }
    if (($search = POST_J("search"))) {
        $query .= "WHERE titulo LIKE ?";
    }
    $search = "%" . $search . "%";
    $producto = select($query, $search);
    echo $producto? json_encode($producto) : "[false]";
}