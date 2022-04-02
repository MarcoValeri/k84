<?php
// Include initialize.php
require_once './private/initialize.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/k84/index.php':
    case '/k84/':
        require pathView('home.php');
        break;

    default:
        http_response_code(404);
        require pathView('errors/404.php');
}