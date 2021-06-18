<?php

class Producto {
    
    public int    $id;
    public String $name;
    public String $description;
    public String $created_at;
    public String $modified_at;
    public String $deleted_at;

    public function __construct($id, $name, $description, $created_at, $modified_at, $deleted_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->deleted_at = $deleted_at;
    }

}