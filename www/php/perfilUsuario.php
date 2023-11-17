<?php
require "./php/comprobarSesion.php";
if (($cliente = comprobarSesion())) {
    require("php/views/partials/headUsuario.php");
} else {
    require("php/views/partials/headInicio.php");
}

require("views/perfilUsuario.view.php");