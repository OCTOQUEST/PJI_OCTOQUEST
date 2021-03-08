<!DOCTYPE html>
<html lang="pt-br">



<head>
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title> Sugira uma questão de múltipla escolha - Octoquest</title>
    <link rel="stylesheet" href="css/forum3.css">
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

    <form name="Fórum3" action="fórum3-banco.php" method="POST">

    <div class="titulo">
        <p class="h2"> Sugira uma questão:</p>
    </div>
    <div class="card">
        
        <textarea class= "disciplina" cols = "65" rows = "2" placeholder="Insira a disciplina"></textarea>
        <textarea class="questao" cols="65" rows="10"name='descricao' placeholder="Insira a questão"></textarea>
        <textarea class="a" cols= "65" rows="3" name='a' placeholder="A."></textarea>
        <textarea class="b" cols= "65" rows="3" name='b' placeholder="B."></textarea>
        <textarea class="c" cols= "65" rows="3" name='c' placeholder="C."></textarea>
        <textarea class="d" cols= "65" rows="3" name='d' placeholder="D."></textarea>
        <textarea class="e" cols= "65" rows="3" name='e' placeholder="E."></textarea>
    
        <p class="ts">Selecione a alternativa correta:</p>
        
        <div class = "select">
        <form>
        <input type="radio" id="a" name="resposta" value="a"><label for="a">A</label>
        <input type="radio" id="b" name="resposta" value="b"><label for="b">B</label>
        <input type="radio" id="c" name="resposta" value="c"><label for="c">C</label>
        <input type="radio" id="d" name="resposta" value="d"><label for="d">D</label>
        <input type="radio" id="e" name="resposta" value="e"><label for="e">E</label>
        </form>
        </div>

        <a href="fórum1.php" class=botao>Adicionar tema de redação</a>
        <a href="fórum2.php" class=botaodois>Questão dissertativa </a>

     
        <div class="card-group">
            <button type="submit">ENVIAR</button>
        </div>
    </div>
    </div>
    </form>
</body>

</html>

