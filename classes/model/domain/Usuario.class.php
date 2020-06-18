<?php

class Usuario{
    private $nome;
    private $rg;
    private $cpf;
    private $status;
    private $login;
    private $email;
    private $senha;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->atributo = $atributo;
    }


}

?>