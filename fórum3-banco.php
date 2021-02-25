<?php
include_once("conexao.php");
session_start();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$resposta_a = filter_input(INPUT_POST, 'a', FILTER_SANITIZE_STRING);
$resposta_b = filter_input(INPUT_POST, 'b', FILTER_SANITIZE_STRING);
$resposta_c = filter_input(INPUT_POST, 'c', FILTER_SANITIZE_STRING);
$resposta_d = filter_input(INPUT_POST, 'd', FILTER_SANITIZE_STRING);
$resposta_e = filter_input(INPUT_POST, 'e', FILTER_SANITIZE_STRING);
$cadastro = $_SESSION['cadastro'];

$result_usuario = "INSERT INTO questao(descricao, tipo_questao, cadastro) VALUES ('$descricao','Disssertativa', '$cadastro')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$cod_questao = mysqli_insert_id($conn);

$result_usuario_2 = "INSERT INTO resposta (cod_questao,correto) VALUES ('$cod_questao', '$resposta_a'), ('$cod_questao', '$resposta_b'), ('$cod_questao', '$resposta_c'), ('$cod_questao', '$resposta_d'), ('$cod_questao', '$resposta_e') ";
//echo $result_usuario_2;
$resultado_usuario_2 = mysqli_query($conn, $result_usuario_2);

header('Location: fórum3.php');