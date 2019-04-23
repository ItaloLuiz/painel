<?php 
include '../../../config.php';
include '../../../funcoes.php';

$senha_oculta = $_POST['senha_oculta'];

if($_POST['senha'] == $senha_oculta){
    $senha = $senha_oculta;
}else{
    $senha = $senha;
}


$cod   = $_POST['cod_prestador'];

//$campos = "nome='$nome',email='$email',doc='$doc',senha='$senha'";

$campos = array(    
    'nome'  =>$_POST['nome'],
    'email' =>$_POST['email'],
    'doc'   =>$_POST['doc'],
    'senha' =>$_POST['senha']    
);

$sucesso = "<script>alert('atualizado com sucesso');history.go(0);</script>";
$erro    = "<script>alert('erro ao atualizar');history.go(0);</script>";
$where   = "cod_prestador = '$cod'";

$insere = Update($campos,'tbl_prestador',$where,$sucesso,$erro);



print_r($insere);