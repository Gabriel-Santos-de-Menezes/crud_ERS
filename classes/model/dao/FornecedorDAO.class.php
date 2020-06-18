<?php 

class FornecedoreDAO{
    private $query;

    public function cadastrar($objFornecedor){
        $this->query = "inset into fornecedor (cnpj, nome, endereco, telefone, email, tp_material_fornecido, data_cadastro) values(:cnpj, :nome, :endereco, :telefone, :email, :tp_material_fornecido, :data_cadastro) where cnpj = :cnpj";
        try{
            $conexao = new Conexao();
            $fornecedor = $conexao->getCon()->prepare($this->query);
            $fornecedor->bindValue('cnpj', $objFornecedor->__get('cnpj'));
            $fornecedor->bindValue('nome', $objFornecedor->__get('nome'));
            $fornecedor->bindValue('endereco', $objFornecedor->__get('endereco'));
            $fornecedor->bindValue('telefone', $objFornecedor->__get('telefone'));
            $fornecedor->bindValue('email', $objFornecedor->__get('email'));
            $fornecedor->bindValue('tp_material_fornecido', $objFornecedor->__get('tp_material_fornecido'));
            return $fornecedor->execute();

        }catch(Exception $e){
            return "Erro ao cadastrar!". $e->getMessage();
        }
    }

}

?>