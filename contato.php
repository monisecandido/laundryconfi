<?php 


    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $estado = $_POST["estado"];
    $mensagem = $_POST["mensagem"];
    $assunto = $_POST["assunto"];
    $telefone = $_POST["telefone"];
  
    include_once 'conexao.php';    
      
    $sql = "insert into contato values(null,
            '".$nome."','".$email."','".$estado."','".$mensagem."','".$assunto."','".$telefone."')";
    //echo $sql;
      
    if(mysql_query($sql,$con)){
        $msg = "Gravado com sucesso!";
    }else{
        $msg = "Erro ao gravar!";
    }
    mysql_close($con);    
?>