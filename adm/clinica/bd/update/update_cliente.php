<?php 
include '../../../config.php';
include '../../../funcoes.php';

$senha_oculta = $_POST['senha_hidden'];

if($_POST['senha_cliente'] == $senha_oculta){
    $senha = $senha_oculta;
}else{
    $senha = $senha;
}


$cod   = $_POST['cod_cliente'];

//$campos = "nome='$nome',email='$email',doc='$doc',senha='$senha'";

$campos = array(    
    'cod_prestador'=>$_POST['cod_prestador'],
    'nome_cliente'  =>$_POST['nome_cliente'],
    'email_cliente' =>$_POST['email_cliente'],
    'documento_cliente'   =>$_POST['documento_cliente'],
    'senha_cliente' =>$_POST['senha_cliente']    
);

$sucesso = "<script>alert('atualizado com sucesso');history.go(0);</script>";
$erro    = "<script>alert('erro ao atualizar');history.go(0);</script>";
$where   = "cod_cliente = '$cod'";

$insere = Update($campos,'tbl_clientes',$where,$sucesso,$erro);



print_r($insere);