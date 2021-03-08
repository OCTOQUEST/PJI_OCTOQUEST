<?php
include_once("conexao.php");
session_start();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$cadastro = $_SESSION['cadastro'];

$result_usuario = "INSERT INTO questao(descricao, tipo_questao, cadastro) VALUES ('$descricao','Disssertativa', '$cadastro')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: fórum1.php');