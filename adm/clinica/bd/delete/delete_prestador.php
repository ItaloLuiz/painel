<?php 

include '../../../config.php';
include '../../../funcoes.php';




$cod   = $_POST['id'];

$sucesso = "<script>alert('apagado com sucesso');history.go(0);</script>";
$erro    = "<script>alert('erro ao apagar');history.go(0);</script>";

$where   = "cod_prestador = '$cod'";

$insere = Delete('tbl_prestador',$where,$sucesso,$erro);


print_r($insere);