<?php include("head.php"); ?>

<body>
    <?php include("menu.php"); ?>
    <div class="container">

        <form class="form-horizontal" id="formPedidos" action="classes/controller/PedidosController.php" method="post">
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

                        <div class="result"></div>

                        <table class="table" id="tbl">
                            <thead>
                                <tr>
                                    <th scope="col">Pedido</th>
                                    <th scope="col">Fornecedor</th>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Data do Pedido</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td>
                                    <?php
                                            include("classes/config/Conexao.class.php");
                                            include("classes/model/dao/PedidoDAO.class.php");

                                            $objDAO = new PedidoDAO();
                                            $consulta = $objDAO->ConsultarUltimoPedido();
                                            $codigo = 0;
                                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                                $codigo =$linha['codigo'];
                                            }
                                    ?>
                                            <input id="" name="codigo"  value="<?= $codigo+1 ?>" placeholder=""  class="form-control input-md"  type="text"> 
                                    </td>
                                    <td><select class="form-control" name="cnpj_fornecedor">
                                            <option>...</option>
                                            <?php
                                            
                                            include("classes/model/dao/FornecedorDAO.class.php");

                                            $objDAO = new FornecedorDAO();
                                            $consulta = $objDAO->consultar();
                                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                <option value="<?= $linha['cnpj'] ?>"><?= $linha['nome'] ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select></td>

                                    <td>
                                        <input id="" name="produto" placeholder="" class="form-control input-md" required="" type="text">
                                    </td>
                                    <td>
                                        <input id="" name="quantidade" placeholder="" class="form-control input-md" required="" type="number">
                                    </td>
                                    <td>
                                        <input id="" name="valor" placeholder="" class="form-control input-md" required="" type="number">
                                    </td>
                                    <td>
                                        <input id="" name="dataPedido" value="<?= date("d/m/Y") ?>" placeholder="" class="form-control input-md" required="" type="text">
                                    </td>

                                </tr>

                            </tbody>
                        </table>


                    </div>
                </div>

            </fieldset>
            <div class="form-group">
                <label class="col-md-2 control-label" for="Cadastrar"></label>
                <div class="col-md-8">
                    <button id="Cadastrar" name="cadastrar" class="btn btn-success " type="Submit">Cadastrar</button>
                </div>
            </div>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>