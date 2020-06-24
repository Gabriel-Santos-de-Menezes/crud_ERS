<?php

class Produto{
    private $nome;
    private $quantidade;
    private $valor;
    private $codigo;
    private $fornecedor_produto;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
}

?>