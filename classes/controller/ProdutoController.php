<?php
include '../config/Conexao.class.php';
include '../model/dao/ProdutoDAO.class.php';
include '../model/domain/Produto.class.php';

if($_POST || $_GET){

    if(isset($_POST['cadastrar'])){

        $produto = new Produto();
        $produtoDAO = new ProdutoDAO();

        $produto->__set('nome', $_POST['nome']);
        $produto->__set('quantidade', $_POST['quantidade']);
        $produto->__set('valor', $_POST['valor']);
        $produto->__set('fornecedor_produto', $_POST['fornecedor_produto']);
        

        $resultado = $produtoDAO->cadastrar($produto);
        /*
        echo $resultado;
        echo '<pre>';
        print_r($produto);
        echo '</pre>';
        echo '<br>';
        echo $produto->__get('nome');
        */
            if ($resultado){
                echo '<script> '
                        . 'alert("Inserido com sucesso");'
                        . 'window.location.href = "/template_sistema/produtos.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/template_sistema/produtos.php"'
                    . '</script>';
            }
            
            
    }


    if(isset($_POST['alterar'])){

        $produto = new Produto();
        $produtoDAO = new ProdutoDAO();

        $produto->__set('codigo', $_GET['codigo']);
        $produto->__set('nome', $_POST['nome']);
        $produto->__set('quantidade', $_POST['quantidade']);
        $produto->__set('valor', $_POST['valor']);
        $produto->__set('fornecedor_produto', $_POST['fornecedor_produto']);
        $resultado = $produtoDAO->alterar($produto);
        
        echo $resultado;
        print_r($fornecedor);
        
            if ($resultado){
                echo '<script> '
                        . 'alert("Alterado com sucesso");'
                        . 'window.location.href = "/template_sistema/produtos.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao alterar!");'
                        . 'window.location.href = "/template_sistema/produtos.php"'
                    . '</script>';
            }
    }

    //Pegando o botão e o código do cliente via get
    if(isset($_GET['acao']) && $_GET['acao'] == "Excluir"){
        $produto = new Produto();
        $produtoDAO = new ProdutoDAO();
        $produto->__set('codigo', $_GET['codigo']);

        $resultado = $produtoDAO->excluir($produto);
        echo $resultado;
        
            if ($resultado){
                echo '<script> '
                        . 'alert("Excluido com sucesso");'
                        . 'window.location.href = "/template_sistema/produtos.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao excluir!");'
                        . 'window.location.href = "/template_sistema/produtos.php"'
                    . '</script>';
            }
            
    }
    
    
}

?>