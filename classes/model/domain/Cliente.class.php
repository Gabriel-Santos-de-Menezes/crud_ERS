<?php

class Cliente{
    private $codigo;
    private $nome;
    private $rg;
    private $cpf;
    private $telefone;
    private $data_nascimento;
    private $email;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }


}

?>