<?php

class PedidoDAO{

    private $query;

    public function cadastrar($objProduto){
        $this->query = "insert into pedido (codigo, cnpj_fornecedor, produto, quantidade, dataPedido, valor, valor_total, status) values( :codigo, :cnpj_fornecedor, :produto, :quantidade, :dataPedido,  :valor, :quantidade * :valor, 'Pedido')";
        
        try{
            $conexao = new Conexao();
            $pedido = $conexao->getCon()->prepare($this->query);
            $pedido->bindValue(':codigo', $objProduto->__get('codigo'));
            $pedido->bindValue(':cnpj_fornecedor', $objProduto->__get('cnpj_fornecedor'));
            $pedido->bindValue(':produto', $objProduto->__get('produto'));
            $pedido->bindValue(':quantidade', $objProduto->__get('quantidade'));
            $pedido->bindValue(':dataPedido', $objProduto->__get('dataPedido'));
            $pedido->bindValue(':valor', $objProduto->__get('valor'));

            return $pedido->execute();

        }catch(Exception $e){
            return "Erro ao cadastrar!". $e->getMessage();
        }
    }

    public function ConsultarUltimoPedido(){
        $this->query = "Select * from pedido where codigo = (select max(codigo) from pedido)";
        try{
            $conexao = new Conexao();
            $pedido = $conexao->getCon();
            return $pedido->query($this->query);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
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
        $this->query = "Select * from pedido";
        try{
            $conexao = new Conexao();
            $pedido = $conexao->getCon();
            return $pedido->query($this->query);
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