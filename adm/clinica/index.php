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
      Dashboard
        <small>Painel de Controle</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <!--conteudo-->

        <!--box topo-->
         <div class="row">

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Prestadores</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="listar_prestadores.php" class="small-box-footer">Lista de Prestadores <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>180</h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
            <i class="ion ion-person"></i>
            </div>
            <a href="listar_clientes.php" class="small-box-footer">Lista de Clientes <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>440</h3>

              <p>Documentos</p>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            <a href="listar_documentos.php" class="small-box-footer">Ver Documentos <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      


         </div>
        <!--box topo-->

        <!--graficos-->
        <div class="row">

        <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Documentos Cadastrados por mês</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 250px; width: 287px;" width="287" height="250"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

       </div>
        <!--graficos-->

    
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
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    var areaChartData = {
      labels  : ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
      datasets: [     
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90,15,56,45,78,85]
        }
      ]
    }

    var areaChartOptions = {     
      showScale               : true,     
      scaleShowGridLines      : false,     
      scaleGridLineColor      : 'rgba(0,0,0,.05)',      
      scaleGridLineWidth      : 1,     
      scaleShowHorizontalLines: true,      
      scaleShowVerticalLines  : true,      
      bezierCurve             : true,     
      bezierCurveTension      : 0.3,     
      pointDot                : false,     
      pointDotRadius          : 4,     
      pointDotStrokeWidth     : 1,      
      pointHitDetectionRadius : 20,     
      datasetStroke           : true,    
      datasetStrokeWidth      : 2,     
      datasetFill             : true,    
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      maintainAspectRatio     : true,     
      responsive              : true
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    
    var barChartOptions                  = {
     
      scaleBeginAtZero        : true,     
      scaleShowGridLines      : true,     
      scaleGridLineColor      : 'rgba(0,0,0,.05)',     
      scaleGridLineWidth      : 1,     
      scaleShowHorizontalLines: true,     
      scaleShowVerticalLines  : true,      
      barShowStroke           : true,     
      barStrokeWidth          : 2,     
      barValueSpacing         : 5,     
      barDatasetSpacing       : 1,     
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>




</body>
</html>