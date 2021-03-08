<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login - Octoquest</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    body {
        background-image: url("img/bg-login-cadastro.jpg");
        background-size: cover;
    }
</style>

<body>
    <header class="menu-principal">
        <main>
            <div class="div-em-cima">
                <div class="logo-pequeno">
                    <a href="tela-inicial-do-sistema.html">
                        <img src="img/logo pequeno pequeno.png" alt="" />
                    </a>
                </div>
            </div>
        </main>
    </header>


    <form class="form" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <h2 class="title"> Para utilizar nossos serviços, faça login.</h2>
                <?php
                session_start();
                if (isset($_SESSION["erro_login"]))
                    echo "<b class='title1'>Erro! E-mail ou senha inválidos.</b>";
                unset($_SESSION["erro_login"]);

                ?>
            </div>

            <div class="card-group">
                <label>E-mail</label>
                <input type="email" name="email" placeholder="Insira seu e-mail" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Insira sua senha" required>
            </div>

            <div class="card-group1">
                <button type="submit">LOGAR</button>
            </div>
        </div>
    </form>

    <div class="para-cadastro">
        <a href="cadastro.php" style="text-decoration:none">Não tem uma conta no Octoquest? <u>Cadastre-se.</u></a>
    </div>

</body>

</html>