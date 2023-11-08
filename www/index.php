<?php

$servername = "db"; // Cambia esto al nombre de tu servidor de base de datos
$username = "root"; // Cambia esto al nombre de usuario de tu base de datos
$password = "test"; // Cambia esto a la contraseña de tu base de datos
$dbname = "tienda"; // Cambia esto al nombre de tu base de datos
$productos = [];
// Establecer la conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// Consulta SELECT
$sql = "SELECT * FROM Productos"; // Cambia "tu_tabla" al nombre de la tabla que deseas consultar

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $foto = $row["Foto"];
        $nombre = $row["Titulo"];
        $precio = $row["Precio"];
        $producto = '<a href="index.php">
        <div class="caja">
            <div class="img"><img src="' . $foto . '"></div>
            <div class="bottom">
                <h5>' . $precio . "€" . '</h5>
            </div>
            <div class="top">
                <p>' . $nombre . '</p>
            </div>
        </div>
        </a>';
        // Puedes hacer lo que necesites con estos valores
        array_push($productos, $producto);
    }
} else {
    echo "No se encontraron resultados.";
}

// Cierra la conexión
$conn->close();

require("php/views/index.viewUsuario.php");
