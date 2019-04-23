<?php include 'includes/header.php';?>

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
        Cadastrar documento        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="listar_documentos.php"><i class="fa fa-users"></i> documentos</a></li>
        <li class="active">Cadastrar documento</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <!--conteudo-->
      <div class="row">
        <div class="col-md-12">
         <a class="btn btn-primary" href="listar_documentos.php">Voltar</a>
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
                <form name="form" id="form" method="post" enctype="multipart/form-data" action="bd/insert/insert_documento.php" >
              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Titulo do Documento</label>
                  <input type="text" class="form-control" name="titulo_doc" id="titulo_doc" placeholder="Nome" required>
                </div>
                <div class="form-group">
                  <label for="prestador">Nome do Prestador</label>                  
                  <div class="form-group">                   
                    <select class="form-control" name="cod_prestador" id="prestador" required>
                      <option value="">prestador</option>
                      <?php foreach($query_prestador as $row){?> 
                      <option value="<?php echo $row['cod_prestador'];?>"><?php echo $row['nome'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="cliente">Nome do Cliente</label>                  
                  <div class="form-group">                   
                    <select class="form-control" name="cod_cliente" id="cliente" required>
                      <option disabled value="">Selecione</option>
                      <?php foreach($query_cliente as $row){?>
                      <option value="<?php echo $row['cod_cliente'];?>"><?php echo $row['nome_cliente'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="arquivo">Arquivo</label>
                  <input type="file" class="form-control" name="arquivo" id="arquivo">
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