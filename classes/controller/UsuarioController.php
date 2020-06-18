<?php
include '../config/Conexao.class.php';
include '../model/dao/UsuarioDAO.class.php';
include '../model/domain/Usuario.class.php';

if($_POST){

    if(isset($_POST['Cadastrar'])){

        $usuario = new Usuario();
        $usuarioDAO = new UsuarioDAO();

        $usuario->__set('nome', $_POST['nome']);
        $usuario->__set('cpf', $_POST['cpf']);
        $usuario->__set('rg', $_POST['rg']);
        $usuario->__set('email', $_POST['email']);
        $usuario->__set('login', $_POST['login']);
        $usuario->__set('senha', $_POST['senha']);
        $usuario->__set('status', $_POST['status']);

    
        $resultado = $usuarioDAO->inserir($usuario);
        echo $resultado;
            /*if ($resultado){
                echo '<script> '
                        . 'alert("Inserido com sucesso");'
                        . 'window.location.href = "/template_sistema/CadastrarUsuario.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/template_sistema/CadastrarUsuario.php"'
                    . '</script>';
            }*/
    }
    
    
}

?>