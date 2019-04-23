<?php 

include '../../../config.php';
include '../../../funcoes.php';

$campos = array(
    'cod_prestador' => GeraSenha(6,false),
    'nome'  =>$_POST['nome'],
    'email' =>$_POST['email'],
    'doc'   =>$_POST['doc'],
    'senha' =>$_POST['senha']
);

$sucesso = "<script>alert('inserido com sucesso');history.go(0);</script>";
$erro    = "<script>alert('erro ao inserir');history.go(0);</script>";

$insere = Insert($campos,'tbl_prestador',$sucesso,$erro);

echo $insere;