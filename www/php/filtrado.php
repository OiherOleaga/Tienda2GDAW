<?php
require "./php/methods.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch (POST_J("partida")) {
        case "todos":
            
            break;
        default:
            header("HTTP/1.1 404 Not Found");
            header('Content-Type: application/json');
            die(json_encode(["error" => "404 Not Found"]));
    }
}