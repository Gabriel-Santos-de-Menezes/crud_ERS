<?php

class Fornecedor{
    private $cnpj;
    private $nome;
    private $email;
    private $telefone;
    private $tp_material_fornecido;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
}

?>