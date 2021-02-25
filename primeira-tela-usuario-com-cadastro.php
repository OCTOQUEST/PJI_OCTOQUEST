<?php 
session_start();
echo $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Tela Principal - Octoquest</title>

    <link rel="stylesheet" href="css/style4.css">
</head>

<style>
    body {
        background-image: url("img/bg-tela-fundo.jpg");
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
                <div class="home">
                    <a href="" style="text-decoration:none">
                        HOME
                    </a>
                </div>
                <div class="contato">
                    <a href="" style="text-decoration:none">
                        CONTATO
                    </a>
                </div>
                <div class="minha-conta-foto">
                    <a href="">
                        <img src="img/coisinho.png" alt="" />
                    </a>
                </div>
                <div class="minha-conta">
                    <a href="" style="text-decoration: none">
                        Minha conta
                    </a>
                </div>
            </div>
            </div>
        </main>
    </header>
    <div class="botoes">
        <div class="botao-gerar-provas">
        <button > <a href="tela-disciplinas.html" style="text-decoration:none">GERAR PROVA</a> 
        </button>
        </div>
        <div class="botao-forum">

        <button > <a href="fórum1.php" style="text-decoration:none">FÓRUM</a> </button>
        </div>
    </div>
</body>

</html>