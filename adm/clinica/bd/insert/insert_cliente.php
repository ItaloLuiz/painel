<?php 

include '../../../config.php';
include '../../../funcoes.php';

$campos = array(
    'cod_cliente'   => GeraSenha(6,false),
    'cod_prestador'=>$_POST['cod_prestador'],
    'nome_cliente'  =>$_POST['nome_cliente'],
    'email_cliente' =>$_POST['email_cliente'],
    'documento_cliente'   =>$_POST['documento_cliente'],
    'senha_cliente'       =>$_POST['senha_cliente']
);

$sucesso = "<script>alert('inserido com sucesso');history.go(0);</script>";
$erro    = "<script>alert('erro ao inserir');history.go(0);</script>";

$insere = Insert($campos,'tbl_clientes',$sucesso,$erro);

echo $insere;