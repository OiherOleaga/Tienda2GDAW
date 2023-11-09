<?php

if (isset($_COOKIE[session_name()])) {
    header("Location: /");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "baseDeDatos.php";
    execute("insert into");
}

require "views/registro.view.php";