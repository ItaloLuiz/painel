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
        Documentos       
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Documentos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <!--conteudo-->
        

        <div class="row">

        <div class="col-md-12">
         <a class="btn btn-success" href="cadastrar_documento.php">Cadastrar Novo</a>
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
                  <th>Titulo do documento</th>
                  <th>Nome do prestador</th>
                  <th>Nome do cliente</th>
                  <th>Arquivo</th>
                  <th>Data Cadastro</th>
                  <th>Ação</th>
                </tr>

                </thead>
                <tbody>
                <?php foreach($query_documentos as $row){?>  
                <tr>
                  <td><?php echo $row['titulo_doc'];?></td>
                  <td><?php echo Get_prestador($row['cod_prestador']);?></td>
                  <td><?php echo Get_Cliente($row['cod_cliente']);?></td>                 
<?php
$caminho = '../upload/'.$row['cod_doc'].'.'.$row['tipo_doc'];
if(file_exists($caminho)){?> 
                  <td><a href="download.php?cod=<?php echo $row['cod_doc'];?>&tipo=<?php echo $row['tipo_doc'];?>">Baixar</a></td>
<?php }else{ ?>  
  <td><span class="text-danger">arquivo não existe</span></td>
<?php } ?>               
                  <td><?php echo $row['data_cadastro'];?></td>
                  <td>        
                    <a class="btn btn-primary btn-xs" href="editar_documento.php?cod=<?php echo $row['cod_doc'];?>">Editar</a>            
                    <!--<a class="btn btn-danger btn-xs" href="">Apagar</a>-->
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