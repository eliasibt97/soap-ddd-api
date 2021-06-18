<?php
// echo $_SERVER['REQUEST_METHOD'];
// die();

ini_set('display_errors', 1);

require "app/server/Router.php";

$router = new Router();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        # code...
        break;

    case 'POST':
        # code...
        break;
    
    default:
        
        break;
}