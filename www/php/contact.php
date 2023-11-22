<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require "./php/comprobarSesion.php";

    if (($cliente = comprobarSesion())) {
        if ($_SESSION["tipo"]=="cliente") {
            require("php/views/partials/headUsuario.php");
        }else{
            require("php/views/partials/headEmpresa.php");
        }
    } else {
        require("php/views/partials/headInicio.php");
    }
}

require("views/contact.view.php");
