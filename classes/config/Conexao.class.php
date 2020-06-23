<?php

class Conexao{

    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost; dbname=banco_ers", "root", "");
    }
    
    public function getCon() {
        return $this->con;
    }
}

?>