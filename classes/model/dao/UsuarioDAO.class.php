<?php

class UsuarioDAO{
    private $query;

    public function inserir($objUsuario){
        $this->query = "insert into usuario (nome,cpf,rg,email, login, status ,senha) values(:nome,:cpf,:rg, :email, :login, :status :senha, )";
        try{
            $conexao = new Conexao();
            $usuario = $conexao->getCon()->prepare($this->query);
            $usuario->bindValue(":nome", $objUsuario->__get('nome'));
            $usuario->bindValue(":cpf", $objUsuario->__get('cpf'));
            $usuario->bindValue(":rg", $objUsuario->__get('rg'));
            $usuario->bindValue(":email", $objUsuario->__get('email'));
            $usuario->bindValue(":login", $objUsuario->__get('login'));
            $usuario->bindValue(":status", $objUsuario->__get('status'));
            $usuario->bindValue(":senha", $objUsuario->__get('senha'));
            return $usuario->execute();
        }catch(Exception $e){
            return "Erro ao inserir!".$e->getMessage();
        }
    }
}

?>