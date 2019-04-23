<?php 

//função para conexão
function ConectaLocal(){
    $servidor = SERVIDOR;
    $usuario  = USUARIO;
    $senha    = SENHA;
    $banco    = BANCO;
    $conecta  = mysqli_connect($servidor,$usuario,$senha,$banco) or die(mysqli_error());
    mysqli_set_charset($conecta,"utf8"); 
    return $conecta;
}
//limpar sql
function Limpa_sql($sql){
    $conn = ConectaLocal();
    $sql  = strip_tags($sql);
    return mysqli_real_escape_string($conn,$sql);
}
//selecionar dados no banco
function Seleciona($sql){
    $conn  = ConectaLocal();
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));   
    $post  = array();
     while($row = mysqli_fetch_assoc($query)){
         $post[] = $row;
     }
     return $post;
     mysqli_close($conn);
 }
//inserir no banco
function Insert($campos,$tabela,$s = null,$e = null){
    $conn = ConectaLocal();
    $campo   = '';
    $valores = '';
    foreach($campos as $chave => $valor){
        $campo   .= $chave.",";
        $valores .= "'".Limpa_sql($valor)."',";
    }
    $campo   = substr($campo,0,-1);
    $valores = substr($valores,0,-1); 
    $sql = "INSERT INTO $tabela ($campo) VALUES ($valores)";
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if(!$query){
        if($r == null){
            return 'erro';
        }else{
            return $r;
        }
    }else{
        if($e == null){
            return 'inserido';
        }else{
            return $s;
        }
    }
    mysqli_close($conn);
}
//editar no banco
function Update($campos,$tabela,$where = null,$s = null,$e = null){  
  $conn = ConectaLocal();   
  $campo = '';
   foreach($campos as $key => $value){
       $value = Limpa_sql($value);
       $campo .= "$key = '$value'".',';
   }
  $campo = substr($campo,0,-1);
  $sql = "UPDATE $tabela SET $campo WHERE $where";
    if($where == null){
        return '<script>alert("Informe o where");</script>';
        die();
        exit();
    }
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if(!$query){
        if($r == null){
            return 'erro';
        }else{
            return $r;
        }
    }else{
        if($e == null){
            return 'editado';
        }else{
            return $s;
        }
    }
    mysqli_close($conn);
}
//apaga dados
function Delete($tabela,$where = null,$s = null,$e = null){
    $conn = ConectaLocal();    
    if($where == null){
        return '<script>alert("Informe o where");</script>';
        die();
        exit();
    }
    $sql = "DELETE FROM $tabela WHERE $where";
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));    
    if(!$query){
        if($r == null){
            return 'erro';
        }else{
            return $r;
        }
    }else{
        if($e == null){
            return 'apagado';
        }else{
            return $s;
        }
    }
    mysqli_close($conn);
}
//gerar senhas
function GeraSenha($qtda,$esp = false){
	if($qtda <=3){
		$qtda = 4;
	}
	if($esp == true){
		$carac = '@!#$%*-^~';
	}else{
		$carac = '';
	}
	$str = 'abcdefghijklmnopqrstuvxzyw0123456789ABDEFGHIJKLMNOPQRSTUVXZYW'.$carac;
	$shuffle = str_shuffle($str);
	return substr($shuffle,mt_rand(0,2),$qtda);
}
//passar data para pt-br
function DataBr($data){
    $date = date_create($data);
    return date_format($date,"d/m/Y");
}
//passar data para pt-br com horas
function DataHsBr($data){
  $date = date_create($data);
  return date_format($date,"d/m/Y H:i:s");   
}
//upload de arquivos
function Upload($caminho,$arquivo,$cod,$permitidos = false){
  $ext = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
  if(!in_array($ext,$permitidos)){
   echo '<script>alert("tipo não permitido");</script>';
   exit;
   die;
  }else{
   $dir = $caminho;   
   $file = $arquivo; 
   $new_name = $cod.'.'.$ext; //Definindo um novo nome para o arquivo
   // Move o arquivo da pasta temporaria de upload para a pasta de destino 
   if (move_uploaded_file($file["tmp_name"], "$dir/".$new_name)) { 
      return 'Enviado';
   } 
   else { 
    return "Erro, o arquivo n&atilde;o pode ser enviado."; 
   }  
  }
}

//forçar download
function Download($nome,$local){
    set_time_limit(0);
    $local = $local.$nome;   
    if (!file_exists($local)) {
    return 'arquivo não encontrado';
    exit;
    }  
    $novoNome = $nome;
    header('Content-type: octet/stream');   
    header('Content-disposition: attachment; filename="'.$novoNome.'";');    
    header('Content-Length: '.filesize($local));    
    return readfile($local); 
}

//selecionar cliente por código
function Get_Cliente($cod){    
    $sql = "SELECT nome_cliente FROM tbl_clientes Where cod_cliente='$cod'";
    $result = seleciona($sql);
    return $result[0]['nome_cliente'];
}

//selecionar prestador por código
function Get_Prestador($cod){   
    $sql = "SELECT nome FROM tbl_prestador Where cod_prestador='$cod'";
    $result = seleciona($sql);
    return $result[0]['nome'];   
}

