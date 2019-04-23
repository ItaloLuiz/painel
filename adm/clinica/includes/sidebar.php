<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo $base_dist;?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>



  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

    <li><a href="dados_clinica.php"><i class="fa fa-cog"></i> <span>Dados da Clinica</span></a></li>

    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i> <span>Prestadores</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="listar_prestadores.php">Listar</a></li>
        <li><a href="cadastrar_prestador.php">Cadastrar</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i> <span>Clientes</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="listar_clientes.php">Listar</a></li>
        <li><a href="cadastrar_cliente.php">Cadastrar</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-archive"></i> <span>Documentos</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="listar_documentos.php">Listar</a></li>
        <li><a href="cadastrar_documento.php">Cadastrar</a></li>
      </ul>
    </li>

    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sair</span></a></li>

  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>