<?php 
 include '../config.php';
 include '../funcoes.php';

 $doc  = $_GET['cod'];
 $tipo = $_GET['tipo'];
 $nome = $doc.'.'.$tipo;
 $local = '../upload/';

 $download = Download($nome,$local);


if($download == 'arquivo não encontrado'){
    echo 'arquivo não encontrado';
}else{//cadastro o download no banco

}