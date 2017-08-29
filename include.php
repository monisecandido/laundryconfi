<?php


$conexao = mysqli_connect('10.31.30.92','root','@luno1fpe','lavanderia');.

mysqli_set_charset($conexao, 'utf8');

if ($conexao->connect_error) {
	die("Falha ao realizar conexao:" . $conexao->connect_error);
}



?>..