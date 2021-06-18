<?php

require_once "context/shared/database/DBConfig.php";
require "context/producto/domain/ProductoInterface.php";
require "context/producto/domain/Producto.php";

class ProductoRepository implements ProductoInterface {

    private $db;

    public function __construct() {
        return $this->db = new DBConfig();
    }

    public function createProducto($data){

    }

    public function getProducto(int $id){

    }

    public function getProductos(): array {
        
        try {
            $query = $this->db->connection->prepare("SELECT * FROM productos");
            $query->execute();

            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $pdo) {
            throw $pdo;
        } catch (Exception $e) {
            throw $e->getMessage();
        }

    }

    public function updateProducto(int $id, array $data){

    }

    public function deleteProducto(int $id){

    }

}