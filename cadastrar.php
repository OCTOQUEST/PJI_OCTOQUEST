<!-- //////////////////////////////////////////////////////// -->
<!-- PARTE PHP QUE CADASTRA O USUARIO -->
<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome_usuario = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$instituicao = filter_input(INPUT_POST, 'instituicao', FILTER_SANITIZE_STRING);
$tipo_insti = filter_input(INPUT_POST, 'tipo_insti', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuario (nome, email, nome_usuario, telefone, senha, instituicao, tipo_insti) VALUES ('$nome', '$email', '$nome_usuario', '$telefone', '$senha', '$instituicao', '$tipo_insti')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
