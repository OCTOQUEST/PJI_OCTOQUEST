<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Cadastro - Octoquest</title>

    <link rel="stylesheet" href="css/style2.css">
</head>

<style>
    body {
        background-image: url("img/bg-login-cadastro.jpg");
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
                    <a href="tela-inicial-do-sistema.html">
                        <img src="img/logo pequeno pequeno.png" alt="" />
                    </a>
                </div>
            </div>
        </main>
    </header>
    <form class="form" id= "form" action="cadastrar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <h2 class="title">Insira seus dados pessoais:</h2>
            </div>

            <div class="card-group">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Insira seu nome completo" required>
            </div>

            <div class="card-group">
                <label>E-mail</label>
                <input type="email" name="email" placeholder="Insira seu e-mail" required>
            </div>

            <div class="card-group">
                <label>Nome de usuário</label>
                <input type="text" name="nome_usuario" placeholder="Insira o nome de usuário que deseja utilizar" required>
            </div>

            <div class="card-group">
                <label>Telefone</label>
                <input type="tel" name="telefone" placeholder="Insira seu telefone" required
                data-mask="(00) 0000-0000"
                id = "telefone">
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
            </div>

            <div class="card-group">
                <label>Confirmação de senha</label>
                <input type="password" name="confsenha" id="confsenha" placeholder="Confirme sua senha" required>
            </div>

            <div class="card-top">
                <h2 class="title">Insira os dados de sua instituição:</h2>
            </div>

            <div class="card-group">
                <label>Nome da instituição</label>
                <input type="text" name="instituicao" placeholder="Insira o nome da instituição que você trabalha" required>
            </div>

            <div class="card-group">
                <label>Tipo de instituição</label>
                <input type="text" name="tipo_insti" placeholder="Insira o tipo de instituição" required>
            </div>

            <div class="card-group1">
                <button type="" id='btnenviar'>Inscrever-se</button>
            </div>
        </div>
    </form>

    <div class="para-login">
        <a href="login.php" style="text-decoration:none">Possui uma conta no Octoquest? <u>Login.</u></a>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>

  <script

src="js/dist/jquery.mask.js">

  </script>
  
<script>
$(document).ready(function(){
    $('#telefone').mask('(00) 0000-0000#');
    $('#telefone').mask('(00) 0000-0000#');
    $('#btnenviar').click(function(){
        var senha = $('#senha').val();
        var confsenha = $('#confsenha').val();

        if (senha == confsenha){
            $('#form').submit();

        }else {
            alert('coloque senhas iguais');}
    })
});
</script>

</body>

</html>
