<?php 
 include '../config.php';
 include '../funcoes.php';

 $sql_prestador   = "SELECT * FROM tbl_prestador";
 $query_prestador = seleciona($sql_prestador);

 $sql_cliente   = "SELECT * FROM tbl_clientes";
 $query_cliente = seleciona($sql_cliente);

 $sql_documentos   = "SELECT * FROM tbl_documento";
 $query_documentos = seleciona($sql_documentos);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADM Clinica</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo $base_dist;?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $base_dist;?>bower_components/font-awesome/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="<?php echo $base_dist;?>bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo $base_dist;?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo $base_dist;?>dist/css/skins/skin-blue.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $base_dist;?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.min.css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
    ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
      }
      ::-webkit-scrollbar-button {
      width: 5px;
      height: 5px;
      }
      ::-webkit-scrollbar-thumb {
      background: #333;
      border: 10px none #333;
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      -ms-border-radius: 0px;
      -o-border-radius: 0px;
}
      ::-webkit-scrollbar-thumb:hover {
      background: #333;
      }
      ::-webkit-scrollbar-thumb:active {
      background: #000000;
      }
      ::-webkit-scrollbar-track {
      background: #666666;
      border: 0px none #ffffff;
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      -ms-border-radius: 0px;
      -o-border-radius: 0px;
}
      ::-webkit-scrollbar-track:hover {
      background: #666666;
      }
      ::-webkit-scrollbar-track:active {
      background: #333333;
      }
      ::-webkit-scrollbar-corner {
      background: transparent;
      }
</style>


</head>