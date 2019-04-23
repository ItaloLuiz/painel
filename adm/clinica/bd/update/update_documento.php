<?php 
include '../../../config.php';
include '../../../funcoes.php';

$cod  = $_POST['cod'];
$tipo = $_POST['tipo'];

if(!empty($_FILES['arquivo']['name'])){
    $doc      = $_FILES['arquivo'];
    $filename = $doc['name'];
    $tipo_doc = pathinfo($filename, PATHINFO_EXTENSION);
}else{
    $tipo_doc = $tipo;
}





if(file_exists('../../../upload/'.$cod.$tipo_doc)){
     unlink($arquivo);
}

$campos = array(   
    'cod_prestador'  =>$_POST['cod_prestador'],
    'cod_cliente' =>$_POST['cod_cliente'],
    'titulo_doc'=>$_POST['titulo_doc'],
    'titulo_doc'   =>$_POST['titulo_doc'],
    'tipo_doc' =>$tipo_doc
);

$sucesso = "<script>alert('atualizado com sucesso');history.go(0);</script>";
$erro    = "<script>alert('erro ao atualizar');history.go(0);</script>";
$where   = "cod_doc = '$cod'";



if(!empty($_FILES['arquivo']['name'])){
$caminho = '../../../upload/';
$permitidos = array('pdf','png','jpg','jpeg','PNG','JPG','JPEG');   
$up = Upload($caminho,$doc,$cod,$permitidos);


if($up == 'Enviado'){
    $insere = Update($campos,'tbl_documento',$where,$sucesso,$erro);
    echo $insere;
}else{
    echo $up;
}

}else{
    $insere = Update($campos,'tbl_documento',$where,$sucesso,$erro);
    echo $insere;   
}
