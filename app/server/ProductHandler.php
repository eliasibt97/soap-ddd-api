<?php

require "context/producto/application/GetProducto.php";
require "context/producto/application/GetProductos.php";
require "context/producto/application/CreateProducto.php";
require "context/producto/application/UpdateProducto.php";

class ProductHandler {
    
    private $validate;
    private $response;
    private bool $encodeXML;

    public function __construct() {

    }

    public function getProductos() {
        
    }
}