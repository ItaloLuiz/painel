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
        Clientes        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Clientes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <!--conteudo-->
        

        <div class="row">

        <div class="col-md-12">
         <a class="btn btn-success" href="cadastrar_cliente.php">Cadastrar Novo</a>
        </div>

        <div class="clearfix"></div><br>


        <div class="col-xs-12">
          <div class="box">
            <!--<div class="box-header">
              <h3 class="box-title">Listagem de clientes</h3>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  
                <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Documento</th>
                  <th>Data Cadastro</th>
                  <th>Ação</th>
                </tr>

                </thead>
                <tbody>
                <?php foreach($query_cliente as $row){?>
                <tr>
                  <td><?php echo $row['nome_cliente'];?></td>
                  <td><?php echo $row['email_cliente'];?></td>
                  <td><?php echo $row['documento_cliente'];?></td>
                  <td><?php echo $row['data_cadastro'];?></td>
                  <td>
                    <a class="btn btn-primary btn-xs" href="editar_cliente.php?cod=<?php echo $row['cod_cliente'];?>">Editar</a>
                    <a class="btn btn-danger btn-xs apaga_c" data-id='<?php echo $row['cod_cliente'];?>' href="listar_clientes.php?del=<?php echo $row['cod_cliente'];?>">Apagar</a>
                  </td>
                </tr>
              <?php } ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Documento</th>
                  <th>Data Cadastro</th>
                  <th>Ação</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
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

<script>
  $(function () {   
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>


</body>
</html>