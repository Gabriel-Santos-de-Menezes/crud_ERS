<?php 

class ProdutoDAO{
    private $query;

    public function cadastrar($objProduto){
        $this->query = "insert into produto (nome, quantidade, valor, fornecedor_produto, data_entrada, valor_total) values( :nome, :quantidade, :valor, :fornecedor_produto, CURRENT_TIMESTAMP, :quantidade * :valor)";
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
        $this->query = "UPDATE produto set nome = :nome, quantidade = :quantidade, valor= :valor, fornecedor_produto = :fornecedor_produto, valor_total = :quantidade * :valor WHERE codigo = :codigo ";
        try{
            $conexao = new Conexao();
            $produto = $conexao->getCon()->prepare($this->query);
            $produto->bindValue('codigo', $objProduto->__get('codigo'));
            $produto->bindValue('nome', $objProduto->__get('nome'));
            $produto->bindValue('quantidade', $objProduto->__get('quantidade'));
            $produto->bindValue('valor', $objProduto->__get('valor'));
            $produto->bindValue('fornecedor_produto', $objProduto->__get('fornecedor_produto'));
            return $produto->execute();

        }catch(Exception $e){
            return "Erro ao cadastrar!". $e->getMessage();
        }
    }

    public function consultar(){
        $this->query = "Select * from produto";
        try{
            $conexao = new Conexao();
            $produto = $conexao->getCon();
            return $produto->query($this->query);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }

    public function excluir($objFornecedor){
        $this->query = "delete from produto where codigo = :codigo";
        try{
            $conexao = new Conexao();
            $produto = $conexao->getCon()->prepare($this->query);

            $produto->bindValue(":codigo", $objFornecedor->__get('codigo'));
            return $produto->execute();

        } catch(Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }

}

?>