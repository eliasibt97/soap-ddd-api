<?php

require "Handler.php";

class Router {
    
    private $handler;
    public function __construct()
    {
        $this->handler = new Handler();
    }

    public function get(String $action, array $params) {

    }

    public function post(String $action, array $data) {

    }

    public function put(String $action, array $data){

    }

}