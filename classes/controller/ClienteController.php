<?php
include '../config/Conexao.class.php';
include '../model/dao/ClienteDAO.class.php';
include '../model/domain/Cliente.class.php';

if($_POST){

    if(isset($_POST['Cadastrar'])){

        $cliente = new Cliente();
        $clienteDAO = new ClienteDAO();

        $cliente->__set('nome', $_POST['nome']);
        $cliente->__set('cpf', $_POST['cpf']);
        $cliente->__set('rg', $_POST['rg']);
        $cliente->__set('telefone', $_POST['telefone']);
        $cliente->__set('data_nascimento', $_POST['data_nascimento']);

        $resultado = $clienteDAO->inserir($cliente);
        echo $resultado;
        print_r($cliente);
        
            if ($resultado){
                echo '<script> '
                        . 'alert("Inserido com sucesso");'
                        . 'window.location.href = "/template_sistema/CadastrarCliente.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/template_sistema/CadastrarCliente.php"'
                    . '</script>';
            }
            
    }
    
    
}

?>