<?php
include_once("conexao.php");
session_start();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$resposta = filter_input(INPUT_POST, 'resposta', FILTER_SANITIZE_STRING);
$cadastro = $_SESSION['cadastro'];

$result_usuario = "INSERT INTO questao(descricao, tipo_questao, cadastro) VALUES ('$descricao','Disssertativa', '$cadastro')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$cod_questao = mysqli_insert_id($conn);

$result_usuario_2 = "INSERT INTO resposta (cod_questao,correto) VALUES ('$cod_questao', '$resposta')";
//echo $result_usuario_2;
$resultado_usuario_2 = mysqli_query($conn, $result_usuario_2);

header('Location: fórum2.php');