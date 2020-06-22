<?php include("head.php"); ?>

<body>
  <?php include("menu.php"); ?>
  <div class="container ">

    <form class="form-horizontal" method="Post" action="classes/controller/UsuarioController.php">
      <fieldset>
        <div class="panel panel-primary">
          <div class="panel-heading">Cadastro de Usuários</div>

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
                <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label" for="rg">RG <h11>*</h11></label>
              <div class="col-md-2">
                <input id="rg" name="rg" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
              </div>

              <label class="col-md-1 control-label" for="cpf">CPF<h11>*</h11></label>
              <div class="col-md-2">
                <input id="cpf" name="cpf" placeholder="Apénas números" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
              </div>

            </div>





            <div class="form-group">
              <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
              <div class="col-md-5">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
              </div>

              <label class="col-md-2 control-label" for="login">login:<h11>*</h11></label>
              <div class="col-md-2">
                <input id="login" name="login" placeholder="Apénas números" class="form-control input-md" required="" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="senha">Senha <h11>*</h11></label>
              <div class="col-md-3">
                <input id="senha" name="senha" type="password" class="form-control" required="" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="status">Statust: <h11>*</h11></label>
              <div class="col-md-3">
                <select class="form-control" name="status">
                  <option>...</option>
                  <option value="ativo">Ativo</option>
                  <option value="desativo">Desativo</option>
                
                </select> 
              </div>
            </div>

          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="Cadastrar"></label>
            <div class="col-md-8">
              <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
              <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
            </div>
          </div>

        </div>
  </div>
  


  </fieldset>
  </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>