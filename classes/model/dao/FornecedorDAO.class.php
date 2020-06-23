<?php 

class FornecedorDAO{
    private $query;

    public function cadastrar($objFornecedor){
        $this->query = "insert into fornecedor (cnpj, nome, telefone, email, tp_material_fornecido) values(:cnpj, :nome, :telefone, :email, :tp_material_fornecido)";
        try{
            $conexao = new Conexao();
            $fornecedor = $conexao->getCon()->prepare($this->query);
            $fornecedor->bindValue('cnpj', $objFornecedor->__get('cnpj'));
            $fornecedor->bindValue('nome', $objFornecedor->__get('nome'));
            $fornecedor->bindValue('telefone', $objFornecedor->__get('telefone'));
            $fornecedor->bindValue('email', $objFornecedor->__get('email'));
            $fornecedor->bindValue('tp_material_fornecido', $objFornecedor->__get('tp_material_fornecido'));
            return $fornecedor->execute();

        }catch(Exception $e){
            return "Erro ao cadastrar!". $e->getMessage();
        }
    }

    public function consultar(){
        $this->query = "Select * from fornecedor";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->query);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }

}

?>