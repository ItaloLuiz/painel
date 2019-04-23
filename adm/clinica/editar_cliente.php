<?php include 'includes/header.php';
$cod = $_GET['cod'];
$sql  = "SELECT * FROM tbl_clientes WHERE cod_cliente='$cod'";
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
        Editar Cliente        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="listar_clientes.php"><i class="fa fa-users"></i> Clientes</a></li>
        <li class="active">Editar Cliente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <!--conteudo-->
      <div class="row">
        <div class="col-md-12">
         <a class="btn btn-primary" href="listar_Clientes.php">Voltar</a>
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
                <form name="form" id="form" method="post" enctype="multipart/form-data" action="bd/update/update_cliente.php" >
                <input type="hidden" name="cod_cliente" value="<?php echo $_GET['cod'];?>">
                <div class="form-group">
                  <label for="prestador">Nome do Prestador</label>                  
                  <div class="form-group">                   
                    <select class="form-control" name="cod_prestador" id="prestador" required>
                      <option selected value="<?php echo $query[0]['cod_prestador'];?>"><?php echo Get_Prestador($query[0]['cod_prestador']);?></option>
                      <?php foreach($query_prestador as $row){?> 
                      <option value="<?php echo $row['cod_prestador'];?>"><?php echo $row['nome'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" name="nome_cliente" id="nome" value="<?php echo $query[0]['nome_cliente'];?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email_cliente" id="email" value="<?php echo $query[0]['email_cliente'];?>" required>
                </div>

                <div class="form-group">
                  <label for="doc">Documento</label>
                  <input type="text" class="form-control" name="documento_cliente" id="doc" value="<?php echo $query[0]['documento_cliente'];?>" required>
                </div>

                <div class="form-group">
                  <label for="senha_cliente">Senha</label>
                  <input type="password" class="form-control" name="senha_cliente" id="senha_cliente" value="<?php echo $query[0]['senha_cliente'];?>" autocomplete="off">
                </div>
                <input type="hidden" class="form-control" name="senha_hidden" value="<?php echo $query[0]['senha_cliente'];?>" >

                <div class="form-group">
                  <label for="senha_2">Confirmar Senha</label>
                  <input type="password" class="form-control" name="senha_cliente_2" value="<?php echo $query[0]['senha_cliente'];?>" id="senha_2">
                </div>
              
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
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