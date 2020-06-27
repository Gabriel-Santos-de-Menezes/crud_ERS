<?php
include '../config/Conexao.class.php';
include '../model/dao/PedidoDAO.class.php';
include '../model/domain/Pedido.class.php';



print_r($_GET);
if ($_POST || $_GET) {
    
    
    
    
    if (isset($_POST['cadastrar'])) {
        
        print_r($_POST);

        $pedido = new Pedido();
        $pedidoDAO = new PedidoDAO();
        $pedido->__set('codigo', $_POST['codigo']);
        $pedido->__set('cnpj_fornecedor', $_POST['cnpj_fornecedor']);
        $pedido->__set('produto', $_POST['produto']);
        $pedido->__set('quantidade', $_POST['quantidade']);
        $pedido->__set('valor', $_POST['valor']);
        $pedido->__set('dataPedido', $_POST['dataPedido']);

        $resultado = $pedidoDAO->cadastrar($pedido);
        echo $resultado;
        print_r($pedido);

        if ($resultado) {
            echo '<script> '
                . 'alert("Inserido com sucesso");'
                . 'window.location.href = "/template_sistema/CadastrarPedidos.php"'
                . '</script>';
        } else {
            echo '<script> '
                . 'alert("Erro ao inserir!");'
                . 'window.location.href = "/template_sistema/CadastrarPedidos.php"'
                . '</script>';
        }
        
    }


    /*
    if (isset($_POST['alterar'])) {
        $pedido = new Pedido();
        $pedidoDAO = new PedidoDAO();

        $pedido->__set('nome', $_POST['nome']);
        $pedido->__set('cnpj', $_POST['cnpj']);
        $pedido->__set('email', $_POST['email']);
        $pedido->__set('telefone', $_POST['telefone']);
        $pedido->__set('tp_material_fornecido', $_POST['materialFonrcecido']);
        $resultado = $pedidoDAO->alterar($pedido);

        echo $resultado;
        print_r($fornecedor);

        if ($resultado) {
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
    if (isset($_GET['acao']) && $_GET['acao'] == "btnExcluirFornecedor") {
        $fornecedor = new Fornecedor();
        $fornecedorDAO = new FornecedorDAO();
        $fornecedor->__set('cnpj', $_GET['cnpj']);

        $resultado = $fornecedorDAO->excluir($fornecedor);
        echo $resultado;

        if ($resultado) {
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
        }*/
}

?>