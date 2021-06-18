<?php

require "server/ProductHandler.php";

class Router {
    
    private $handler;
    public function __construct()
    {
        $this->handler = new ProductHandler();
    }

    public function get(String $action, array $params) {
        
        switch ($action) {
            case 'products':
                # code...
                break;
            case 'product':
                # code...
                break;
            default:
                # code...
                break;
        }

    }

    public function post(String $action, array $data) {

    }

    public function put(String $action, array $data){

    }

    public function NotFound() {
        return [];
    }
}