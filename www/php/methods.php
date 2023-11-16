<?php

function POST($name) {
    if (!isset($_POST[$name])) {
        throw new Excption("$name no definido");
    }
    return $_POST[$name];
} 

function GET($name) {
    if (!isset($_GET[$name])) {
        header("HTTP/1.1 404 Not Found");
        require __DIR__ . "../html/error-404.html";
        exit;
    }
    return $_GET[$name];
} 
