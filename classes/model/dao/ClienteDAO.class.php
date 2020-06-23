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

    public function alterar($objcliente){
        $this->query = "UPDATE cliente set nome = :nome, cpf = :cpf, rg = :rg, telefone = :telefone, data_nascimento = :data_nascimento WHERE codigo = :codigo ";
        try{
            $conexao = new Conexao();
            $cliente = $conexao->getCon()->prepare($this->query);
            $cliente->bindValue(":codigo", $objcliente->__get('codigo'));
            $cliente->bindValue(":nome", $objcliente->__get('nome'));
            $cliente->bindValue(":cpf", $objcliente->__get('cpf'));
            $cliente->bindValue(":rg", $objcliente->__get('rg'));
            $cliente->bindValue(":telefone", $objcliente->__get('telefone'));
            $cliente->bindValue(":data_nascimento", $objcliente->__get('data_nascimento'));
            return $cliente->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }

    public function excluir($objcliente){
        $this->query = "delete from cliente where codigo = :codigo";
        try{
            $conexao = new Conexao();
            $cliente = $conexao->getCon()->prepare($this->query);

            $cliente->bindValue(":codigo", $objcliente->__get('codigo'));
            return $cliente->execute();

        } catch(Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }

    public function consultar(){
        $this->query = "Select * from cliente";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->query);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }
    
}
