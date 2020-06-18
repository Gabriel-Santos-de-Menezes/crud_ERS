<?php

include '../config/Conexao.class.php';
include '../model/dao/CategoriaDAO.class.php';
include '../model/domain/Categoria.class.php';

if($_POST){
    if(isset($_POST['btnInserir'])){
        $categoria = new Categoria('', $_POST['descricao']);
        $cDAO = new CategoriaDAO();
        $resultado = $cDAO->inserir($categoria);
        if($resultado){
            echo "Inserido com sucesso";
        }
        else{
            echo $resultado;
        }
    }
}

?>