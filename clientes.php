<?php include("head.php"); ?>

<body>
    <?php include("menu.php"); ?>
    <div class="container page-content">
        <h1>Clientes</h1>

        <a href="CadastrarCliente.php">Novo Cliente</a>
        <table class="table" id="tabela">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("classes/config/Conexao.class.php");
                include("classes/model/dao/ClienteDAO.class.php");
                //$cliente = new Cliente();
                $objDAO = new ClienteDAO();
                $consulta = $objDAO->consultar();
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?= $linha['codigo'] ?></td>
                        <td><?= $linha['nome'] ?></td>
                        <td><?= $linha['telefone'] ?></td>
                        <td><?= $linha['data_nascimento'] ?></td>
                        <td>
                            <a href="edit_produto.php?id=<?= $linha['id'] ?>" data-toggle="modal" data-target=".bd-example-modal-lg" class="text-warning">Alterar </a>|
                            <a href="delete_produto.php?id=<?= $linha['id'] ?>" data-toggle="modal" data-target="#excluir" class="text-danger">Excluir</a>|
                            <a href="view_produto.php?id=<?= $linha['id'] ?>" data-toggle="modal" data-target="#consultarCliente" class="text-success">Visualizar</a>
                        </td>
                    </tr>
                    <!-- Modal excluir cliente -->
                    <div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title" id="exampleModalLabel">Você realmente deseja excluir o cliente <?= $linha['nome'] ?> ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer">
                                    <a  class="btn btn-success" href="classes/controller/ClienteController.php?acao=btnExcluirCliente&codigo=<?= $linha['codigo'] ?>" name="btnExcluirCliente">Sim</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal excluir cliente -->

                    <!-- Modal Alterar -->

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-header bg-warning">
                                <h5 class="modal-title" id="exampleModalLabel">Alterar dados do cliente <?= $linha['nome'] ?> ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="classes/controller/ClienteController.php?codigo=<?= $linha['codigo'] ?>" method="post">
                                    <fieldset>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">Alterar cadastro de cliente</div>

                                            <div class="panel-body">
                                                <div class="form-group">

                                                    <div class="col-md-11 control-label">
                                                        <p class="help-block">
                                                            <h11>*</h11> Campo Obrigatório
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
                                                    <div class="col-md-8">
                                                        <input id="nome" name="nome" value="<?= $linha['nome'] ?>" placeholder="" class="form-control input-md" required="" type="text">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="rg">RG <h11>*</h11></label>
                                                    <div class="col-md-2">
                                                        <input id="rg" name="rg" value="<?= $linha['rg'] ?>" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                                                    </div>

                                                    <label class="col-md-1 control-label" for="cpf">CPF<h11>*</h11></label>
                                                    <div class="col-md-2">
                                                        <input id="cpf" name="cpf" value="<?= $linha['cpf'] ?>" placeholder="Apénas números" class="form-control input-md" required="" type="text" maxlength="14" OnKeyPress="formatar('###.###.####-##', this)" onBlur="showhide()">
                                                    </div>

                                                </div>


                                                <div class="form-group">


                                                    <label class="col-md-2 control-label" for="dtNasc">Nascimento<h11>*</h11></label>
                                                    <div class="col-md-2">
                                                        <input id="dtnasc" name="data_nascimento" value="<?= $linha['data_nascimento'] ?>" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                                    </div>



                                                    <!-- Prepended text-->
                                                    <div class="form-group">
                                                        <label class="col-md-1 control-label" for="telefone">Telefone</label>
                                                        <div class="col-md-3">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                                <input id="prependedtext" name="telefone" value="<?= $linha['telefone'] ?>" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <!--  <div class="form-group">
                                                        <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                                                        <div class="col-md-5">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                                <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                                            </div>
                                                        </div>
                                                    </div> -->



                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                                                        <div class="col-md-8">
                                                            <button id="Cadastrar" name="btnAlterarCliente" class="btn btn-success" type="Submit">Alterar</button>
                                                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" data-dismiss="modal" type="Reset">Cancelar</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal Alterar -->

                    <!-- Modal de Consulta -->
                    <div class="modal fade bd-example-modal-lg" id="consultarCliente" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="exampleModalLabel">Alterar dados do cliente <?= $linha['nome'] ?> ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="classes/controller/ClienteController.php" method="post">
                                    <fieldset>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">Alterar cadastro de cliente</div>

                                            <div class="panel-body">
                                                <div class="form-group">

                                                    <div class="col-md-11 control-label">
                                                        <p class="help-block">
                                                            <h11>*</h11> Campo Obrigatório
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
                                                    <div class="col-md-8">
                                                        <input id="nome" name="nome" disabled value="<?= $linha['nome'] ?>" placeholder="" class="form-control input-md"  type="text">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="rg">RG <h11>*</h11></label>
                                                    <div class="col-md-2">
                                                        <input id="rg" name="rg" value="<?= $linha['rg'] ?>" placeholder="Apenas números" class="form-control input-md" disabled type="text" maxlength="11" pattern="[0-9]+$">
                                                    </div>

                                                    <label class="col-md-1 control-label" for="cpf">CPF<h11>*</h11></label>
                                                    <div class="col-md-2">
                                                        <input id="cpf" name="cpf" value="<?= $linha['cpf'] ?>" placeholder="Apénas números" class="form-control input-md" disabled type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                                    </div>

                                                </div>


                                                <div class="form-group">


                                                    <label class="col-md-2 control-label" for="dtNasc">Nascimento<h11>*</h11></label>
                                                    <div class="col-md-2">
                                                        <input id="dtnasc" name="data_nascimento" value="<?= $linha['data_nascimento'] ?>" placeholder="DD/MM/AAAA" class="form-control input-md" disabled type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                                    </div>



                                                    <!-- Prepended text-->
                                                    <div class="form-group">
                                                        <label class="col-md-1 control-label" for="telefone">Telefone</label>
                                                        <div class="col-md-3">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                                <input id="prependedtext" disabled name="telefone" value="<?= $linha['telefone'] ?>" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                                                        <div class="col-md-5">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                                <input id="email" name="email" class="form-control" placeholder="email@email.com" disabled type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                                            </div>
                                                        </div>



                                                    </div>



                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                                                        <div class="col-md-8">
                                                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" data-dismiss="modal" type="Reset">Fechar</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal de Consulta -->
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#tabela').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    },
                    "select": {
                        "rows": {
                            "_": "Selecionado %d linhas",
                            "0": "Nenhuma linha selecionada",
                            "1": "Selecionado 1 linha"
                        }
                    }
                }
            });
        });
    </script>

</body>

</html>