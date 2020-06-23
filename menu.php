<nav class="navbar menu navbar-expand-md  navbar-dark bg-primary page-content">
  <a class="navbar-brand" href="#">Sistema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Início</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produtos.php">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categorias.php">Categorias</a>
      </li>
    </ul>
  </div>
</nav>

<div class="nav_esquerda">
  <!-- Vertical navbar -->
  <div class="vertical-nav  text-center" id="sidebar">

    <div class=" bg-white  my-4">
      <h4>Tapecaria Santos</h4>
    </div>

    <p class="border_nav_vertical  text-gray font-weight-bold text-uppercase  small  mb-0" data-toggle="collapse" data-target="#cadastro">Cadastrar</p>

    <ul class="nav flex-column  mb-0 collapse show" id="cadastro">
      <li class="nav-item">
        <a href="CadastrarUsuario.php" class="nav-link text-dark font-italic bg-light">
          <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
          Cadastro de Usuários
        </a>
      </li>
      <li class="nav-item">
        <a href="CadastrarCliente.php" class="nav-link text-dark font-italic bg-light">
          <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
          Cadastro de Clientes
        </a>
      </li>
      <li class="nav-item">
        <a href="CadastrarFornecedores.php" class="nav-link text-dark font-italic bg-light">
          <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
          Cadastro de Fornecedores
        </a>
      </li>
      <li class="nav-item">
        <a href="CadastrarPedidos.php" class="nav-link text-dark font-italic bg-light">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
          Cadastro de Pedidos
        </a>
      </li>
    </ul>

    <p class=" border_nav_vertical text-gray font-weight-bold text-uppercase  small  mb-0 " data-toggle="collapse" data-target="#gerenciar">Gerenciamento</p>

    <ul class="nav flex-column bg-white mb-0 collapse show" id="gerenciar">
      <li class="nav-item">
        <a href="GerenciarPedidos.php" class="nav-link text-dark font-italic">
          <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
          Gerenciar Pedidos
        </a>
      </li>
      <li class="nav-item">
        <a href="clientes.php" class="nav-link text-dark font-italic">
          <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
          Gerenciar Clientes
        </a>
      </li>
      <li class="nav-item">
        <a href="gerenciarFornecedor.php" class="nav-link text-dark font-italic">
          <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
          Gerenciar Fornecedores
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
          <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
          Line charts
        </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->

</div>