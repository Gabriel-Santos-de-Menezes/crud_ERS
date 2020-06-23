<?php
include '../config/Conexao.class.php';
include '../model/dao/FornecedorDAO.class.php';
include '../model/domain/Fornecedor.class.php';

if($_POST){

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
                        . 'window.location.href = "/template_sistema/CadastrarFornecedores.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/template_sistema/CadastrarFornecedores.php"'
                    . '</script>';
            }
            
    }
    
    
}

?>