<?php

require_once __DIR__ . "/baseDeDatos.php";


function consultarProductos()
{
    return select("SELECT 
        P.ID AS ID,
        P.Titulo AS Titulo,
        P.Precio AS Precio,
        P.Descripcion AS Descripcion,
        P.Fecha AS ProductoFecha,
        MIN(F1.ID) AS FotoID,
        F1.URL AS Foto
    FROM Productos P
    LEFT JOIN Fotos_producto F1 ON P.ID = F1.ID_Producto
    LEFT JOIN Fotos_producto F2 ON P.ID = F2.ID_Producto AND F1.ID > F2.ID
    WHERE F2.ID IS NULL
    GROUP BY P.ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha, F1.URL
    ORDER BY RAND()");
}

function consultarProductosAdmin()
{
    return select("SELECT 
        P.ID AS ID,
        P.Titulo AS Titulo,
        P.Precio AS Precio,
        P.Descripcion AS Descripcion,
        P.Fecha AS ProductoFecha,
        MIN(F1.ID) AS FotoID,
        F1.URL AS Foto
    FROM Productos P
    LEFT JOIN Fotos_producto F1 ON P.ID = F1.ID_Producto
    LEFT JOIN Fotos_producto F2 ON P.ID = F2.ID_Producto AND F1.ID > F2.ID
    WHERE F2.ID IS NULL
    GROUP BY P.ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha, F1.URL
    ORDER BY P.ID");
}


function productosMasGustados()
{

    return select("SELECT 
    P.ID AS ID,
    P.Titulo AS Titulo,
    P.Precio AS Precio,
    P.Descripcion AS Descripcion,
    P.Fecha AS ProductoFecha,
    MIN(F1.ID) AS FotoID,
    F1.URL AS Foto
    FROM Productos P
    LEFT JOIN Fotos_producto F1 ON P.ID = F1.ID_Producto
    LEFT JOIN Fotos_producto F2 ON P.ID = F2.ID_Producto AND F1.ID > F2.ID
    WHERE F2.ID IS NULL
    GROUP BY P.ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha, F1.URL
    ORDER BY (
    SELECT COUNT(*)
    FROM Likes L
    WHERE L.ID_Producto = P.ID
) DESC, RAND()");
}

function consultarProductoDeEmpresa($id)
{
    return select("SELECT 
        P.ID AS ID,
        P.Titulo AS Titulo,
        P.Precio AS Precio,
        P.Descripcion AS Descripcion,
        P.Fecha AS ProductoFecha,
        MIN(F1.ID) AS FotoID,
        F1.URL AS Foto
    FROM Productos P
    LEFT JOIN Fotos_producto F1 ON P.ID = F1.ID_Producto
    LEFT JOIN Fotos_producto F2 ON P.ID = F2.ID_Producto AND F1.ID > F2.ID
    WHERE F2.ID IS NULL AND P.ID_Comerciante = ?
    GROUP BY P.ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha, F1.URL
    ORDER BY P.ID DESC", $id);
}

function consultarProductoDeEmpresaLikes($id)
{
    return select("SELECT 
    P.ID AS ID,
    P.Titulo AS Titulo,
    P.Precio AS Precio,
    P.Descripcion AS Descripcion,
    P.Fecha AS ProductoFecha,
    MIN(F1.ID) AS FotoID,
    F1.URL AS Foto,
    COUNT(L.ID_Producto) AS Likes
FROM Productos P
LEFT JOIN Fotos_producto F1 ON P.ID = F1.ID_Producto
LEFT JOIN Fotos_producto F2 ON P.ID = F2.ID_Producto AND F1.ID > F2.ID
LEFT JOIN Likes L ON P.ID = L.ID_Producto
WHERE F2.ID IS NULL AND P.ID_Comerciante = ?
GROUP BY P.ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha, F1.URL
ORDER BY Likes DESC, rand()", $id);
}


function consultarProductoID($id)
{
    $producto = select("SELECT 
        P.ID AS ID,
        P.Titulo AS Titulo,
        P.Precio AS Precio,
        P.Descripcion AS Descripcion,
        P.Fecha AS ProductoFecha,
        GROUP_CONCAT(F.URL) AS Fotos,
        C.Nombre_empresa AS Nombre_empresa,
        C.avatar AS avatar_empresa,
        C.ID AS idEmpresa
    FROM Productos P
    LEFT JOIN Fotos_producto F ON P.ID = F.ID_Producto
    LEFT JOIN Comerciantes C ON P.ID_Comerciante = C.ID
    WHERE P.ID = ?
    GROUP BY P.ID;", $id);

    return $producto == null ? $producto : $producto[0];
}

function filtrado($partida, $search, $idCategorias, $precioMin, $precioMax)
{
    switch ($partida) {
    }
    $datos = [];
    $join = "";
    $where = "";
    $orderBy = "";
    if ($search) {
        $where .= $where == "" ? "\n\tWHERE (" : "(";
        $orderBy .= $orderBy == "" ? "\nORDER BY " : "";
        // el LIKE lo hace ignore case
        $join = "\nLEFT JOIN Comerciantes c ON p.id_comerciante = c.id ";
        $palabras = explode(" ", preg_replace('/\s+/', ' ', $search));
        $size = count($palabras);
        for ($i = 0; $i < $size; $i++) {
            // empieza con acaba con ...
            // las categorias que mande el id 
            // que salga antes segundo los likes
            $where .= "c.nombre_empresa LIKE :p$i OR p.titulo LIKE :p$i OR p.descripcion LIKE :p$i " . ($i < $size - 1 ? "OR " : ") ");
            $orderBy .=
                "\nCASE" .
                "\n     WHEN p.titulo LIKE :p$i OR p.descripcion LIKE :p$i OR c.nombre_empresa LIKE :p$i THEN " . $size - $i .
                "\n     ELSE 0" .
                "\nEND " . ($i < $size - 1 ? "+ " : "DESC");
            $datos["p$i"] = "%" . $palabras[$i] . "%";
        }
    }

    if ($precioMin && $precioMax) {
        $condicion = "p.precio BETWEEN :precioMin AND :precioMax ";
        $where .= $where == "" ? "\n\tWHERE $condicion" : "AND $condicion";
        $datos["precioMin"] = $precioMin;
        $datos["precioMax"] = $precioMax;
    } else if ($precioMin) {
        $condicion = "p.precio > :precioMin ";
        $where .= $where == "" ? "\n\tWHERE $condicion" : "AND $condicion";
        $datos["precioMin"] = $precioMin;
    } else if ($precioMax) {
        $condicion = "p.precio < :precioMax ";
        $where .= $where == "" ? "\n\tWHERE $condicion" : "AND $condicion";
        $datos["precioMax"] = $precioMax;
    }

    if ($idCategorias) {
        //$where .= $where == ""? "WHERE " : "AND (";
        $orderBy .= $orderBy == "" ? "\nORDER BY " : ", ";
        $idCategorias = explode(",", $idCategorias);
        $datosIn = "";
        $size = count($idCategorias);
        for ($i = 0; $i < $size; $i++) {
            $datosIn .= ":idCategoria$i" . ($i < $size - 1 ? ", " : "");
            $datos["idCategoria$i"] = $idCategorias[$i];
        }
        $join .=
            "\nJOIN (SELECT DISTINCT id_producto" .
            "\n      FROM Categorias_Productos" .
            "\n         WHERE ID_Categorias IN ($datosIn)) cp ON p.id = cp.id_producto ";
        $orderBy .=
            "\n(SELECT count(*)" .
            "\nFROM Categorias_Productos" .
            "\n WHERE id_categorias IN ($datosIn) AND id_producto = p.id" .
            "\nGROUP BY id_producto) DESC";
    }

    $f2 = "";
    if ($where === "") {
        $f2 = "WHERE F2.ID IS NULL ";
    } else {
        $f2 = "and F2.ID IS NULL ";
    }
    $query = "SELECT p.*, MIN(F1.ID) AS FotoID, F1.URL AS foto FROM Productos p " .
        "LEFT JOIN Fotos_producto F1 ON p.ID = F1.ID_Producto
    LEFT JOIN Fotos_producto F2 ON p.ID = F2.ID_Producto AND F1.ID > F2.ID "
        . $join
        . $where .
        $f2
        . "GROUP BY p.ID, p.Titulo, p.Precio, p.Descripcion, p.Fecha, F1.URL"
        . $orderBy;
    //die($query);
    return select($query, $datos);
}

function getProductosComerciante($idComerciante)
{
    return select("SELECT 
    P.ID AS ID,
    P.Titulo AS Titulo,
    P.Precio AS Precio,
    P.Descripcion AS Descripcion,
    P.Fecha AS ProductoFecha,
    MIN(F1.ID) AS FotoID,
    F1.URL AS Foto
    FROM Productos P
    LEFT JOIN Fotos_producto F1 ON P.ID = F1.ID_Producto
    LEFT JOIN Fotos_producto F2 ON P.ID = F2.ID_Producto AND F1.ID > F2.ID
    WHERE F2.ID IS NULL AND ID_Comerciante=?
    GROUP BY P.ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha, F1.URL
    ORDER BY P.ID ASC", $idComerciante);
}

function consultarProductoLikes($id)
{
    return select("SELECT P.ID AS ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha,
    min(F1.ID), F1.URL AS Foto
    FROM Likes L
    JOIN Productos P ON L.ID_Producto = P.ID
    LEFT JOIN Fotos_producto F ON P.ID = F.ID_Producto
    LEFT JOIN Fotos_producto F1 ON P.ID = F1.ID_Producto
    LEFT JOIN Fotos_producto F2 ON P.ID = F2.ID_Producto AND F1.ID > F2.ID
    WHERE L.ID_Cliente = ? AND F2.ID IS NULL
    GROUP BY P.ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha, F1.URL", $id);
}

function borrarProductoId($id)
{
    return execute("DELETE FROM Productos WHERE ID=?", $id);
}


function insertProducto($producto) {
    execute("INSERT INTO Productos (titulo, precio, descripcion, fecha, id_comerciante) 
            VALUES (:titulo, :precio, :descripcion, NOW(), :idComerciante)", $producto);
    return select("SELECT id FROM Productos WHERE titulo = ?", $producto["titulo"])[0]["id"];
}

function getMaxIdProducto() {
    $id = select("SELECT max(id) as id FROM Productos");
    return ($id? $id[0]["id"] : 0);
}

function tituloDistinto($titulo) {
    return select("SELECT 1 FROM Productos WHERE titulo = ?", $titulo);
}
function consultarProductosSimilares($cat)
{
    return select("SELECT 
    P.ID AS ID,
    P.Titulo AS Titulo,
    P.Precio AS Precio,
    P.Descripcion AS Descripcion,
    P.Fecha AS ProductoFecha,
    MIN(F1.ID) AS FotoID,
    F1.URL AS Foto
    FROM Productos P
    LEFT JOIN Fotos_producto F1 ON P.ID = F1.ID_Producto
    LEFT JOIN Fotos_producto F2 ON P.ID = F2.ID_Producto AND F1.ID > F2.ID
    WHERE F2.ID IS NULL AND Categoria=?
    GROUP BY P.ID, P.Titulo, P.Precio, P.Descripcion, P.Fecha, F1.URL
    ORDER BY P.ID ASC", $cat); 
}