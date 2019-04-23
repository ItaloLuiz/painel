<?php 

include '../../../config.php';
include '../../../funcoes.php';

$doc      = $_FILES['arquivo'];
$filename = $doc['name'];
$tipo_doc = pathinfo($filename, PATHINFO_EXTENSION);
$cod = GeraSenha(6,false);

$campos = array(
    'cod_doc' => $cod,
    'cod_prestador'  =>$_POST['cod_prestador'],
    'cod_cliente' =>$_POST['cod_cliente'],
    'titulo_doc'=>$_POST['titulo_doc'],
    'titulo_doc'   =>$_POST['titulo_doc'],
    'tipo_doc' =>$tipo_doc
);

$sucesso = "<script>alert('inserido com sucesso');history.go(0);</script>";
$erro    = "<script>alert('erro ao inserir');history.go(0);</script>";




$caminho = '../../../upload/';
$permitidos = array('pdf','png','jpg','jpeg','PNG','JPG','JPEG');   
$up = Upload($caminho,$doc,$cod,$permitidos);


if($up == 'Enviado'){
    $insere = Insert($campos,'tbl_documento',$sucesso,$erro);
    echo $insere;
}else{
    echo $up;
}
