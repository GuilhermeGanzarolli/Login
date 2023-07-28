<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="/fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <title>InvestTrack/Login</title>
</head>
<body>

    <?php 
        session_start();
        session_destroy();     
    ?>

    <div id="containerLogin">
        <?php if(isset($_GET['login']) && $_GET['login']=='sucesso'){?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Usuário cadastrado com <strong>sucesso</strong>!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <?php if(isset($_GET['login']) && $_GET['login']=='erro1'){?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Endereço de email já está sendo utilizado 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if(isset($_GET['login']) && $_GET['login']=='erro2'){?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Dados inválidos 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if(isset($_GET['login']) && $_GET['login']=='erro3'){?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Por favor realize o login 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        
        <div class="row" id="areaLogin">
            <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7" id="areaImgLogin">
                <img src="../../imgs/imgLogin.png" style="width: 450px; margin-left: 1em; margin-top: 3.5em;" alt="">
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-4" id="formLogin">
                <h3 class="mb-4">Login</h3>
                <form action="controllerview.php?acao=logar" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="E-mail">
                        <label for="floatingInput">E-mail</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha">
                        <label for="floatingPassword">Senha</label> 
                    </div>
                    <a href="Cadastrar.php">Você é novo por aqui?</a><br>
                    <a href="#">Esqueceu a senha?</a>

                    <button class="btn" id="btnSubmit" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <!--BootsTrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


<!--Tema vai ser roxo bem escuro e verde-->