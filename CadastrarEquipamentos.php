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
        <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
        <div class="col-md-5">
        <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
        </div>
      </div>
      

      <div class="form-group">
        <label class="col-md-2 control-label" for="rg">Marca <h11>*</h11></label>  
        <div class="col-md-3">
        <input id="marca" name="marca"  class="form-control input-md" required="" type="text">
      </div>
        
        <label class="col-md-1 control-label" for="cpf">Modelo<h11>*</h11></label>  
        <div class="col-md-3">
        <input id="modelo" name="modelo"  class="form-control input-md" required="" type="text" >
      </div>
  
      </div>
      
  
      <div class="form-group">
        <label class="col-md-2 control-label" for="rg">Quantidade <h11>*</h11></label>  
        <div class="col-md-3">
        <input id="quantidade" name="quantidade"  class="form-control input-md" required="" type="text" maxlength="11" >
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="senha">Valor <h11>*</h11></label>
        <div class="col-md-3">
          <input id="valor" name="valor" type="number" class="form-control" required="" type="text" >
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
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
