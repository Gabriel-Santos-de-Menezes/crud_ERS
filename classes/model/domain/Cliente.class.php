<?php

class Cliente{
    private $codigo;
    private $nome;
    private $quantidade;
    private $data_entrada;
    private $data_saida;
    private $valor;
    private $fornecedor_produto;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }


}

?>