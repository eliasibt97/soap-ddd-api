<?php

require_once "context/shared/database/DBConfig.php";
require "context/producto/domain/ProductoInterface.php";
require "context/producto/domain/Producto.php";

class ProductoRepository implements ProductoInterface {

    private $db;

    public function __construct() {
        return $this->db = new DBConfig();
    }

    public function createProducto(){

    }

    public function getProducto(){

    }

    public function getProductos(){

    }

    public function updateProducto(){

    }

    public function deleteProducto(){

    }

}