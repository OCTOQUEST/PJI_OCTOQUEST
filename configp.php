<?php
session_start();
include('conexao.php');
$cadastro = $_SESSION['cadastro'];
$result_usuario = "SELECT * FROM usuario WHERE cadastro = '$cadastro'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$dt = mysqli_fetch_array($resultado_usuario);


?>
<!doctype html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title> Configurações da conta - Octoquest</title>
    <link rel="stylesheet" href="css/configp.css">
</head>

<style>
    body {
        background-image: url("img/config.png");
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

<body>
    <header class="menu-principal">
        <main>
            <div class="div-em-cima">
                <div class="logo-pequeno">
                    <a onClick="history.go(-1)">
                        <img src=" img/logo pequeno pequeno.png" alt="" />
                    </a>
                </div>
            </div>
        </main>
    </header>
    <div class="titulo">
        <p class="h2"> Configurações da conta </p>
    </div>
    <div class="dp">
        <p class="h1"> Dados pessoais</p>
    </div>

    <form method="POST" action="config.php">
        <div class="card">
            <div class="card-group">
                <label>Nome</label>
                <input type="text" name="nome" value=<?php echo $dt['nome'] ?> placeholder="Alterar nome " required>
            </div>

            <div class="card-group">
                <label>Nome de usuário</label>
                <input type="text" name="nome_usuario" value=<?php echo $dt['nome_usuario'] ?> placeholder="Alterar nome de usuário" required>
            </div>

            <div class="card-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $dt['email'] ?>" placeholder="Alterar e-mail" required>
            </div>
            <div class="card-group">
                <label>Telefone</label>
                <input type="tel" name="telefone" value="<?php echo $dt['telefone'] ?>" placeholder="Alterar telefone" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="insira sua senha" required>
            </div>

            <div class="d1">
                <p class="h3"> Dados Institucionais</p>
            </div>
            <div class="card-group">
                <label>Nome da instituição</label>
                <input type="text" name="instituicao" value="<?php echo $dt['instituicao'] ?>" placeholder="Alterar nome da instituição">
            </div>
            <div class="card-group">
                <label>Tipo de instituição</label>
                <input type="text" name="tipo_insti" value="<?php echo $dt['tipo_insti'] ?>" placeholder="Alterar tipo de instituição">
            </div>
            <div class="botao">
                <button type="submit">CANCELAR</button>
            </div>
            <div class="botaodois">
                <button type="submit">SALVAR</button>
            </div>
        </div>
    </form>
</body>

</html>