<?php 

class ProdutoDAO{
    private $query;

    public function cadastrar($objProduto){
        $this->query = "insert into produto ( nome, quantidade, valor, fornecedor_produto) values( :nome, :quantidade, :valor, :fornecedor_produto)";
        try{
            $conexao = new Conexao();
            $produto = $conexao->getCon()->prepare($this->query);
            $produto->bindValue('nome', $objProduto->__get('nome'));
            $produto->bindValue('quantidade', $objProduto->__get('quantidade'));
            $produto->bindValue('valor', $objProduto->__get('valor'));
            $produto->bindValue('fornecedor_produto', $objProduto->__get('fornecedor_produto'));
            return $produto->execute();

        }catch(Exception $e){
            return "Erro ao cadastrar!". $e->getMessage();
        }
    }

    public function alterar($objProduto){
        $this->query = "UPDATE produto set cnpj = :cnpj, nome = :nome, telefone = :telefone, email= :email, tp_material_fornecido = :tp_material_fornecido WHERE cnpj = :cnpj ";
        try{
            $conexao = new Conexao();
            $fornecedor = $conexao->getCon()->prepare($this->query);
            $fornecedor->bindValue('cnpj', $objProduto->__get('cnpj'));
            $fornecedor->bindValue('nome', $objProduto->__get('nome'));
            $fornecedor->bindValue('telefone', $objProduto->__get('telefone'));
            $fornecedor->bindValue('email', $objProduto->__get('email'));
            $fornecedor->bindValue('tp_material_fornecido', $objProduto->__get('tp_material_fornecido'));
            return $fornecedor->execute();

        }catch(Exception $e){
            return "Erro ao cadastrar!". $e->getMessage();
        }
    }

    public function consultar(){
        $this->query = "Select * from produto";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->query);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }

    public function excluir($objFornecedor){
        $this->query = "delete from fornecedor where cnpj = :cnpj";
        try{
            $conexao = new Conexao();
            $fornecedor = $conexao->getCon()->prepare($this->query);

            $fornecedor->bindValue(":cnpj", $objFornecedor->__get('cnpj'));
            return $fornecedor->execute();

        } catch(Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }

}

?>