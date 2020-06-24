<?php
include '../config/Conexao.class.php';
include '../model/dao/ProdutoDAO.class.php';
include '../model/domain/Produto.class.php';

if($_POST || $_GET){

    if(isset($_POST['cadastrar'])){

        $produto = new Produto();
        $produtoDAO = new ProdutoDAO();

        $produto->__set(':nome', $_POST['nome']);
        $produto->__set(':quantidade', $_POST['quantidade']);
        
        $produto->__set(':valor', $_POST['valor']);
        $produto->__set(':fornecedor_produto', $_POST['fornecedor_produto']);

        $resultado = $produtoDAO->cadastrar($produto);
        echo $resultado;
        print_r($produto);
        
        /*
            if ($resultado){
                echo '<script> '
                        . 'alert("Inserido com sucesso");'
                        . 'window.location.href = "/template_sistema/gerenciarFornecedor.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/template_sistema/gerenciarFornecedor.php"'
                    . '</script>';
            }
            */
            
    }


    if(isset($_POST['alterar'])){

        $fornecedor = new Fornecedor();
        $fornecedorDAO = new FornecedorDAO();

        $fornecedor->__set('nome', $_POST['nome']);
        $fornecedor->__set('cnpj', $_POST['cnpj']);
        $fornecedor->__set('email', $_POST['email']);
        $fornecedor->__set('telefone', $_POST['telefone']);
        $fornecedor->__set('tp_material_fornecido', $_POST['materialFonrcecido']);
        $resultado = $fornecedorDAO->alterar($fornecedor);
        
        echo $resultado;
        print_r($fornecedor);
        
            if ($resultado){
                echo '<script> '
                        . 'alert("Alterado com sucesso");'
                        . 'window.location.href = "/template_sistema/gerenciarFornecedor.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao alterar!");'
                        . 'window.location.href = "/template_sistema/gerenciarFornecedor.php"'
                    . '</script>';
            }
    }

    //Pegando o botão e o código do cliente via get
    if(isset($_GET['acao']) && $_GET['acao'] == "btnExcluirFornecedor"){
        $fornecedor = new Fornecedor();
        $fornecedorDAO = new FornecedorDAO();
        $fornecedor->__set('cnpj', $_GET['cnpj']);

        $resultado = $fornecedorDAO->excluir($fornecedor);
        echo $resultado;
        
            if ($resultado){
                echo '<script> '
                        . 'alert("Excluido com sucesso");'
                        . 'window.location.href = "/template_sistema/gerenciarFornecedor.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao excluir!");'
                        . 'window.location.href = "/template_sistema/gerenciarFornecedor.php"'
                    . '</script>';
            }
            
    }
    
    
}

?>