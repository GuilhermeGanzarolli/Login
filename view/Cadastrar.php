<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="/fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="../js/jquery-3.7.0.min.js"></script>
    <script src="../js/cadastro.js"></script>
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>InvestTrack/Cadastrar</title>
</head>
<body>

    <div id="areaCadastro">
        <div id="formCadastro">
            <h3 class="mb-4">Cadastrar</h3>
            <form id="formuCadastro" action="controllerview.php?acao=cadastrar" method="post" onsubmit="return realizaVali()">
                <div class="form-floating mb-3">
                    <input type="text" name="nome" class="form-control" id="nomeInput" placeholder="Nome">
                    <label for="nomeInput">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="E-mail">
                    <label for="emailInput">E-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="senha" class="form-control" id="senhaPrincipal" placeholder="Senha">
                    <label for="senhaPrincipal">Senha</label> 
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="confirmSenha" placeholder="Confirmar senha">
                    <label for="confirmSenha">Confirmar senha</label> 
                </div>
                <div class="form-floating mb-3">
                    <input type="date" name="dataNascimento" class="form-control" id="floatingInput" placeholder="">
                    <label for="floatingInput">Data de nascimento</label>
                </div>

                <button class="btn" id="btnSubmit" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

    <!--BootsTrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


<!--Tema vai ser roxo bem escuro e verde-->