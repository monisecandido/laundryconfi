<?php


$nome  = $_POST['nome'];
$sobrenome  = $_POST['sobrenome'];
$cpf  = $_POST['cpf'];
$telefone  = $_POST['telefone'];
$email  = $_POST['email'];
$senha  = $_POST['senha'];
	

$sql = "INSERT INTO usuario (nome, sobrenome, telefone, cpf, email, senha) VALUES ('{$nome}', '{$sobrenome}', '{$telefone}', '{$cpf}', '{$email}', '{$senha}')"; 
	
echo "$sql";
$conexao = mysqli_connect('localhost','root','','laundryconfi');
$resultado = mysqli_query($conexao, $sql); 
if ($resultado) {
	echo "Usuario inserido com sucesso!";
}else{
	$msg = mysqli_error($conexao);
	echo($msg);
	die("Erro ao tentar cadastrar registro <?= $msg?>");
}
?>