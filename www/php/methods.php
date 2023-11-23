<?php

function POST($name) {
    if (!isset($_POST[$name])) {
        header("HTTP/1.1 404 Not Found");
        $errorDev = "POST $name no encontrado";
        require "php/views/partials/scriptError.php";
        require "./html/error-404.html";
        exit;
    }
    return $_POST[$name];
} 

function GET($name) {
    if (!isset($_GET[$name])) {
        header("HTTP/1.1 404 Not Found");
        $errorDev = "GET $name no encontrado";
        require "php/views/partials/scriptError.php";
        require "./html/error-404.html";
        exit;
    }
    return $_GET[$name];
} 

function POST_J($name) {
    if (!isset($_POST[$name])) {
        header("HTTP/1.1 404 Not Found");
        header('Content-Type: application/json');
        die(json_encode(["error" => "404 Not Found $name no definido"]));
    }
    return $_POST[$name];
}

function postDato($name) {
    return isset($_POST[$name]) ? $_POST[$name] : "";
}

function postAddArray(&$usuario, $key, $keyArray = $key) {
    if (isset($_POST[$key])) {
        $usuario[$keyArray] = $_POST[$key];
    }
}
