<?php
include '../config/Conexao.class.php';
include '../model/dao/FornecedorDAO.class.php';
include '../model/domain/Fornecedor.class.php';

if($_POST || $_GET){

    if(isset($_POST['Cadastrar'])){

        $fornecedor = new Fornecedor();
        $fornecedorDAO = new FornecedorDAO();

        $fornecedor->__set('nome', $_POST['nome']);
        $fornecedor->__set('cnpj', $_POST['cnpj']);
        $fornecedor->__set('email', $_POST['email']);
        $fornecedor->__set('telefone', $_POST['telefone']);
        $fornecedor->__set('tp_material_fornecido', $_POST['materialFonrcecido']);

        $resultado = $fornecedorDAO->cadastrar($fornecedor);
        echo $resultado;
        print_r($fornecedor);
        
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