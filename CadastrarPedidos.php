<?php include("head.php"); ?>

<body>
    <?php include("menu.php"); ?>
    <div class="container">

        <form class="form-horizontal" action="classes/controller/FornecedorController.php" method="post">
            <fieldset>
                <div class="panel panel-primary">
                    <div class="panel-heading">Cadastro de Pedidos</div>

                    <div class="panel-body">
                        <div class="form-group">

                            <div class="col-md-11 control-label">
                                <p class="help-block">
                                    <h11>*</h11> Campo Obrigatório
                                </p>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pedido</th>
                                    <th scope="col">Fornecedor</th>
                                    <th scope="col">Produto</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <div class="form-group">
                                            <div class="col">
                                                <select class="form-control" name="fornecedor_produto">
                                                    <option>...</option>
                                                    <?php
                                                    include("classes/config/Conexao.class.php");
                                                    include("classes/model/dao/FornecedorDAO.class.php");

                                                    $objDAO = new FornecedorDAO();
                                                    $consulta = $objDAO->consultar();
                                                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <option value="<?= $linha['cnpj'] ?>"><?= $linha['nome'] ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <div class="col">
                                                <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#pedido">Adicionar</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <!-- Modal cadastrar pedido -->
                        <div class="modal fade" id="pedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                        <h5 class="modal-title" id="exampleModalLabel">Você realmente deseja excluir o cliente <?= $linha['nome'] ?> ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="produto">Produto: <h11>*</h11></label>
                                                <div class="col-md-8">
                                                    <input id="produto" name="produto" placeholder="" class="form-control input-md" required="" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="cnpj">CNPJ<h11>*</h11></label>
                                                <div class="col-md-3">
                                                    <input id="cnpj" name="cnpj" placeholder="Apénas números" class="form-control input-md" required="" type="text" maxlength="14" onkeydown="javascript: fMasc( this, mCNPJ );" onBlur="showhide()">
                                                </div>

                                            </div>


                                            <!-- Prepended text-->
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="telefone">Telefone</label>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                        <input id="prependedtext" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="14" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" onkeydown="javascript: fMasc( this, mTel );">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Prepended text-->
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                        <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Prepended text-->
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="materialFonrcecido">Material Fornecido <h11>*</h11></label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                        <input id="email" name="materialFonrcecido" class="form-control" required="" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" ml-5 col-7">


                                                <!-- Modal -->
                                                <div class="modal fade" id="adicionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <a class="btn btn-success" href="classes/controller/FornecedorController.php?acao=btnExcluirFornecedor&cnpj=<?= $linha['cnpj'] ?>" name="btnExcluirFornecedor">OK</a>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Fim Modal cadastrar pedido -->


                    </div>
                </div>

            </fieldset>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>