<?php

interface ProductoInterface {
    function createProducto(array $data);
    function getProducto(int $id);
    function getProductos(): array;
    function updateProducto(int $id, array $data);
    function deleteProducto(int $id);
}