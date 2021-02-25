<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select * from usuario where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);


if($row > 0) {
    unset( $_SESSION['erro_login']);
	$_SESSION['usuario'] = $email;
	$dt = mysqli_fetch_array($result);
	$_SESSION['cadastro'] = $dt['cadastro'];
	header('Location: primeira-tela-usuario-com-cadastro.php');

	exit();


}   else {
	
	$_SESSION['nao_autenticado'] = true;
    $_SESSION['erro_login'] = true;
	header('Location: login.php');
	exit();
}