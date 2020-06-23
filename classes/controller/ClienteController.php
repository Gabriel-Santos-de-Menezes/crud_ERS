<?php
include '../config/Conexao.class.php';
include '../model/dao/ClienteDAO.class.php';
include '../model/domain/Cliente.class.php';

if($_POST || $_GET){

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
        
    //Pegar os dados via post, e pegar o codigo do usuário via get
    if(isset($_POST['btnAlterarCliente'])){
        $cliente = new Cliente();
        $clienteDAO = new ClienteDAO();

        $cliente->__set('codigo', $_GET['codigo']);
        $cliente->__set('nome', $_POST['nome']);
        $cliente->__set('cpf', $_POST['cpf']);
        $cliente->__set('rg', $_POST['rg']);
        $cliente->__set('telefone', $_POST['telefone']);
        $cliente->__set('data_nascimento', $_POST['data_nascimento']);

        

        $resultado = $clienteDAO->alterar($cliente);
        echo $resultado;
        
            if ($resultado){
                echo '<script> '
                        . 'alert("Alterado com sucesso");'
                        . 'window.location.href = "/template_sistema/clientes.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao alterar!");'
                        . 'window.location.href = "/template_sistema/clientes.php"'
                    . '</script>';
            }
            
    }

    //Pegando o botão e o código do cliente via get
    if(isset($_GET['acao']) && $_GET['acao'] == "btnExcluirCliente"){
        $cliente = new Cliente();
        $clienteDAO = new ClienteDAO();
        $cliente->__set('codigo', $_GET['codigo']);

        $resultado = $clienteDAO->excluir($cliente);
        echo $resultado;
        
            if ($resultado){
                echo '<script> '
                        . 'alert("Excluido com sucesso");'
                        . 'window.location.href = "/template_sistema/clientes.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao excluir!");'
                        . 'window.location.href = "/template_sistema/clientes.php"'
                    . '</script>';
            }
            
    }
    
}
