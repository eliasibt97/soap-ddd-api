<?php

require_once "context/producto/infrastructure/ProductoRepository.php";

class GetProductos {

    private $repository;
    public function __construct()
    {
        $this->respository = new ProductoRepository();
    }

    public function run(){
        return $this->repository->getProductos();
    }
}