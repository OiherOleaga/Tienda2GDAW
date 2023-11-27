<?php
/**
 * Retrieves the value of a POST parameter and handles errors if the parameter is not found.
 *
 * @param string $name The name of the POST parameter to retrieve.
 *
 * @return mixed The value of the specified POST parameter.
 *
 * @throws Exception If the specified POST parameter is not found, triggers a 404 Not Found error.
 */
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

/**
 * Retrieves the value of a GET parameter and handles errors if the parameter is not found.
 *
 * @param string $name The name of the GET parameter to retrieve.
 *
 * @return mixed The value of the specified GET parameter.
 *
 * @throws Exception If the specified GET parameter is not found, triggers a 404 Not Found error.
 */
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

/**
 * Retrieves the value of a POST parameter and returns a JSON-encoded error if the parameter is not found.
 *
 * @param string $name The name of the POST parameter to retrieve.
 *
 * @return mixed The value of the specified POST parameter.
 */
function POST_J($name) {
    if (!isset($_POST[$name])) {
        header("HTTP/1.1 404 Not Found");
        header('Content-Type: application/json');
        die(json_encode(["error" => "404 Not Found $name no definido"]));
    }
    return $_POST[$name];
}

/**
 * Retrieves the value of a POST parameter or returns an empty string if the parameter is not found.
 *
 * @param string $name The name of the POST parameter to retrieve.
 *
 * @return mixed The value of the specified POST parameter or an empty string if not found.
 */
function postDato($name) {
    return isset($_POST[$name]) ? $_POST[$name] : "";
}

/**
 * Adds a value to the specified key in a user array based on the POST parameters.
 *
 * @param array $usuario The user array to which the value will be added.
 * @param string $key The key used in the POST parameters.
 * @param string|null $keyArray The key to use in the user array (defaults to $key if not provided).
 */
function postAddArray(&$usuario, $key, $keyArray = null) {
    if (!$keyArray) {
        $keyArray = $key;
    }
    if (isset($_POST[$key])) {
        $usuario[$keyArray] = $_POST[$key];
    }
}