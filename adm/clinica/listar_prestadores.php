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
        Prestadores        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Prestadores</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <!--conteudo-->
        

        <div class="row">

        <div class="col-md-12">
         <a class="btn btn-success" href="cadastrar_prestador.php">Cadastrar Novo</a>
        </div>

        <div class="clearfix"></div><br>


        <div class="col-xs-12">
          <div class="box">
            <!--<div class="box-header">
              <h3 class="box-title">Listagem de prestadores</h3>
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
              <?php foreach($query_prestador as $row){?> 
                <tr>
                  <td><?php echo $row['nome'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['doc'];?></td>
                  <td><?php echo DataHsBr($row['data_cadastro']);?></td>
                  <td>
                    <a class="btn btn-primary btn-xs" href="editar_prestador.php?cod=<?php echo $row['cod_prestador'];?>">Editar</a>
                    <a class="btn btn-danger btn-xs apaga" data-id='<?php echo $row['cod_prestador'];?>' href="listar_prestadores.php">Apagar</a>
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