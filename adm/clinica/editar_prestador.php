<?php include 'includes/header.php';
$cod = $_GET['cod'];
$sql  = "SELECT * FROM tbl_prestador WHERE cod_prestador='$cod'";
$query = seleciona($sql);
?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
<?php include 'includes/menu_topo.php';?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include 'includes/sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Prestador        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="listar_prestadores.php"><i class="fa fa-users"></i> Prestadores</a></li>
        <li class="active">Editar Prestador</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <!--conteudo-->
      <div class="row">
        <div class="col-md-12">
         <a class="btn btn-primary" href="listar_prestadores.php">Voltar</a>
        </div>
        <div class="clearfix"></div><br>

        <div class="col-xs-12">
          <div class="box">
          
            <!--<div class="box-header">
              <h3 class="box-title"></h3>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">

            <div class="row">
                <div class="col-md-6">
                <form name="form" id="form" method="post" enctype="multipart/form-data" action="bd/update/update_prestador.php" >
                <input type="hidden" name="cod_prestador" value="<?php echo $_GET['cod'];?>">
                <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $query[0]['nome'];?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email"  value="<?php echo $query[0]['email'];?>" required>
                </div>

                <div class="form-group">
                  <label for="doc">Documento</label>
                  <input type="text" class="form-control" name="doc" id="doc"  value="<?php echo $query[0]['doc'];?>" required>
                </div>

                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" name="senha" id="senha"  value="<?php echo $query[0]['senha'];?>" autocomplete="off" required>
                  <input type="hidden" name="senha_oculta"  value="<?php echo $query[0]['senha'];?>">
                </div>

                <div class="form-group">
                  <label for="senha_repete">Repetir</label>
                  <input type="password" class="form-control" name="senha_repete" id="senha_repete"  value="<?php echo $query[0]['senha'];?>" autocomplete="off" required>
                </div>
              
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Atualizar</button>
              </div>
            </form>
                </div>
            </div>
                
                

            </div>

          </div>
        </div>


      </div>    
        <!--conteudo-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
<?php include 'includes/footer.php';?>



</div>
<!-- ./wrapper -->
<?php include 'includes/scripts_footer.php';?>




</body>
</html>