<!doctype html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title> Sugira um tema de redação - Octoquest</title>
    <link rel="stylesheet" href="css/textarea.css">
</head>

<style>
    body {
        background-image: url("img/fórum.jpg");
        background-size: cover;
        background-size: 110%;
        background-attachment: fixed;
        background-position: center;
    }
</style>

<body>
    <header class="menu-principal">
        <main>
            <div class="div-em-cima">
                <div class="logo-pequeno">
                    <a href="primeira-tela-usuario-com-cadastro.php">
                        <img src="img/logo pequeno pequeno.png" alt="" />
                    </a>
                </div>
                <div class="minha-conta-foto">
                    <a href="tela-de-perfil-provas.html">
                        <img src="img/coisinho.png" alt="" />
                    </a>
                </div>
                <div class="minha-conta">
                    <a href="tela-de-perfil-provas.html" style="text-decoration: none">
                        Minha conta
                    </a>
                </div>
            </div>
        </main>
    </header>

    <form name="Fórum1" action="fórum1-banco.php" method="POST">

        <div class="titulo">
            <p class="h2"> Sugira um tema de redação:</p>
        </div>

        <div class="card">
            <textarea class="textarea" name="descricao" cols="65" rows="11" placeholder="Insira o tema de redação"></textarea>

            <a href="fórum2.php" class=botao>Questão Dissertativa</a>
            <a href="fórum3.php" class=botaodois>Questão de múltipla-escolha </a>

            <div class="card-group">
                <button type="submit">ENVIAR</button>
            </div>
        </div>
        </div>
    </form>
</body>


</html>