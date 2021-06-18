<?php
// echo $_SERVER['REQUEST_METHOD'];
// die();

ini_set('display_errors', 1);

require "app/Router.php";

$router = new Router();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $response = $router->get($action, $_GET);
        echo $response;
        break;
        
    case 'POST':
        $response = $router->post($action, $_POST);
        echo $response;
        break;

    case 'PUT':
        $response = $router->put($action, $_POST);
        echo $response;
        break;
    
    default:
        $response = $router->NotFound();
        echo $response;
        break;
}