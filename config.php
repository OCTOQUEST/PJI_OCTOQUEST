<?php
session_start();
include_once("conexao.php");
$cadastro = $_SESSION['cadastro'];
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome_usuario = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
$instituicao = filter_input(INPUT_POST, 'instituicao', FILTER_SANITIZE_STRING);
$tipo_insti = filter_input(INPUT_POST, 'tipo_insti', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE usuario SET nome = '$nome', email= '$email', nome_usuario= '$nome_usuario', telefone= '$telefone', senha= '$senha', instituicao= '$instituicao', tipo_insti= '$tipo_insti' WHERE cadastro = '$cadastro'";
//echo ($result_usuario);
$resultado_usuario = mysqli_query($conn, $result_usuario);
header('Location: configp.php');