<?php

class ClienteDAO{
    private $query;

    public function inserir($objcliente){
        $this->query = "insert into cliente (nome,cpf,rg, telefone, data_nascimento) values(:nome,:cpf, :rg, :telefone, :data_nascimento)";
        try{
            $conexao = new Conexao();
            $cliente = $conexao->getCon()->prepare($this->query);
            $cliente->bindValue(":nome", $objcliente->__get('nome'));
            $cliente->bindValue(":cpf", $objcliente->__get('cpf'));
            $cliente->bindValue(":rg", $objcliente->__get('rg'));
            $cliente->bindValue(":telefone", $objcliente->__get('telefone'));
            $cliente->bindValue(":data_nascimento", $objcliente->__get('data_nascimento'));
            return $cliente->execute();
        }catch(Exception $e){
            return "Erro ao inserir!".$e->getMessage();
        }
    }
}

?>