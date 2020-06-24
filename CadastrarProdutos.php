<?php include("head.php"); ?>

<body>
  <?php include("menu.php"); ?>
  <div class="container">


    <form class="form-horizontal" action="classes/controller/ProdutoController.php" method="post">
      <fieldset>
        <div class="panel panel-primary">
          <div class="panel-heading">Cadastro de Produto</div>

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
              <div class="col-md-5">
                <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label" for="quantidade">quantidade <h11>*</h11></label>
              <div class="col-md-3">
                <input id="quantidade" name="quantidade" class="form-control input-md" required="" type="number">
              </div>

              <label class="col-md-1 control-label" for="cpf">Valor<h11>*</h11></label>
              <div class="col-md-3">
                <input id="valor" name="valor" class="form-control input-md" required="" type="number">
              </div>

            </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="fornecedor_produto">Fornecedor: <h11>*</h11></label>
                <div class="col-md-4">
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



            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="cadastrar"></label>
              <div class="col-md-8">
                <button id="Cadastrar" name="cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
              </div>
            </div>

          </div>
        </div>


      </fieldset>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!------ Include the above in your HEAD tag ---------->