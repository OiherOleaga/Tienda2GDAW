<?php

function POST($name) {
    if (!isset($_POST[$name])) {
        throw new ExecptionControlada("$name no definido");
    }
    return $_POST[$name];
} 

function GET($name) {
    if (!isset($_GET[$name])) {
        throw new ExcptionControlada("$name no definido");
    }
    return $_GET[$name];
} 
