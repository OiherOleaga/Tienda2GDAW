<?php

require_once __DIR__ . "/baseDeDatos.php";


function consultarProductos() {
    return select("SELECT * FROM Productos");
}

function consultarProductoDeEmpresa($id){
    return select("SELECT * FROM Productos WHERE ID_Comerciante = ?", $id);
}

function consultarProductoLikes($id){
    return select("SELECT Productos.ID, Productos.Titulo, Productos.Precio, Productos.Descripcion, Productos.Foto
    FROM Likes
    INNER JOIN Productos ON Likes.ID_Producto = Productos.ID
    WHERE Likes.ID_Cliente = ?", $id);

}

function consultarProductoID($id) {
    $producto = select("SELECT Productos.ID as ProductoID, Productos.Titulo, Productos.Precio, Productos.Descripcion, Productos.Foto,
                            Comerciantes.ID as ComercianteID, Comerciantes.ID as idEmpresa, Comerciantes.Nombre_empresa, Comerciantes.Avatar as avatar_empresa
                            FROM Productos
                            INNER JOIN Comerciantes ON Productos.ID_Comerciante = Comerciantes.ID
                            WHERE Productos.ID = ?", $id);
    return $producto == null? $producto : $producto[0];
}

function filtrado($partida, $search, $idCategorias, $precioMin, $precioMax) {
    switch ($partida) {
    }
    $datos = [];
    $join = "";
    $where = "";
    $orderBy = "";
    if ($search) {
        $where .= $where == ""? "\n\tWHERE (" : "(";
        $orderBy .= $orderBy == ""? "\nORDER BY " : "";
        // el LIKE lo hace ignore case
        $join = "\nLEFT JOIN Comerciantes c ON p.id_comerciante = c.id ";
        $palabras = explode(" ", preg_replace('/\s+/', ' ', $search));
        $size = count($palabras);
        for ($i = 0; $i < $size; $i++) {
            // empieza con acaba con ...
            // las categorias que mande el id 
            // que salga antes segundo los likes
            $where .= "c.nombre_empresa LIKE :p$i OR p.titulo LIKE :p$i OR p.descripcion LIKE :p$i " . ($i < $size - 1? "OR " : ") ");
            $orderBy .= 
            "\nCASE" .
            "\n     WHEN p.titulo LIKE :p$i OR p.descripcion LIKE :p$i OR c.nombre_empresa LIKE :p$i THEN " . $size - $i .
            "\n     ELSE 0" .
            "\nEND " . ($i < $size - 1? "+ " : "DESC");
            $datos["p$i"] = "%" . $palabras[$i] . "%";
        }
    }
    
    if ($precioMin && $precioMax) {
        $condicion = "p.precio BETWEEN :precioMin AND :precioMax ";
        $where .= $where == ""? "\n\tWHERE $condicion" : "AND $condicion";
        $datos["precioMin"] = $precioMin;
        $datos["precioMax"] = $precioMax;
    } else if ($precioMin) {
        $condicion = "p.precio > :precioMin ";
        $where .= $where == ""? "\n\tWHERE $condicion" : "AND $condicion";
        $datos["precioMin"] = $precioMin;
    } else if ($precioMax) {
        $condicion = "p.precio < :precioMax ";
        $where .= $where == ""? "\n\tWHERE $condicion" : "AND $condicion";
        $datos["precioMax"] = $precioMax;
    }

    if ($idCategorias) {
        //$where .= $where == ""? "WHERE " : "AND (";
        $orderBy .= $orderBy == ""? "\nORDER BY " : ", ";
        $idCategorias = explode(",", $idCategorias);
        $datosIn = "";
        $size = count($idCategorias);
        for ($i = 0; $i < $size; $i++) {
            $datosIn .= ":idCategoria$i" . ($i < $size - 1? ", " : "");
            $datos["idCategoria$i"] = $idCategorias[$i];
        }
        $join .=
        "\nJOIN (SELECT DISTINCT id_producto" .
        "\n      FROM Categorias_Productos" .
        "\n         WHERE id_categorias IN ($datosIn)) cp ON p.id = cp.id_producto";
        $orderBy .= 
        "\n(SELECT count(*)" .
        "\nFROM Categorias_Productos" . 
        "\n WHERE id_categorias IN ($datosIn) AND id_producto = p.id" .
        "\nGROUP BY id_producto) DESC";
    }

    $query = "SELECT p.* FROM Productos p " . $join . $where . $orderBy;
    //die($query);
    return select($query, $datos);
}

function getProductosComerciante($idComerciante) {
    return select("SELECT * FROM Productos WHERE id_comerciante = ?", $idComerciante);
}