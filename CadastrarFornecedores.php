<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sistema em PHP</title>
  </head>
  <body>
    <?php include("menu.php"); ?>
    <div class="container">
      
      <form class="form-horizontal">
      <fieldset>
      <div class="panel panel-primary">
          <div class="panel-heading">Cadastro de Cliente</div>
          
          <div class="panel-body">
      <div class="form-group">
      
      <div class="col-md-11 control-label">
              <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
      </div>
      </div>
      

      <div class="form-group">
        <label class="col-md-2 control-label" for="Nome">Nome da empresa<h11>*</h11></label>  
        <div class="col-md-8">
        <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
        </div>
      </div>
        
      <div class="form-group">
        <label class="col-md-2 control-label" for="cnpj">CNPJ<h11>*</h11></label>  
        <div class="col-md-2">
        <input id="cnpj" name="cnpj" placeholder="Apénas números" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
      </div>
      
      </div>
    

    <!-- Prepended text-->
    <div class="form-group">      
        <label class="col-md-2 control-label" for="prependedtext">Telefone</label>
        <div class="col-md-3">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
          OnKeyPress="formatar('## #####-####', this)">
        </div>
      </div>
    </div> 

    <!-- Prepended text-->
    <div class="form-group">
      <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
        </div>
      </div>
    </div>

    <div class=" ml-5 col-7">
      
      <h4 class="h4 text-center">Materiais fornecidos</h4>
      <table class="table container">
        <thead>
        <tr>
          <th scope="col">Descrição</th>
          <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td></td>
          <td><a href="#" class="text-warning">Alterar</a> | <a href="#" class="text-danger">Excluir</a> | <a href="#" class="text-success">Adicionar</a></td>
        </tr>
        </tbody>
      </table>
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
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
