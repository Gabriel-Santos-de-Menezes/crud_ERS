<?php

class Pedido{
    private $codigo;
    private $cnpj_fornecedor;
    private $produto;
    private $quantidade;
    private $dataPedido;
    private $status;
    private $valor;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
}

?>