<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
    if(!isset($_SESSION['id_usu'])){
        header('Location: Login.php?login=erro3');
    }
    ?>
</head>
<body>

    <div class="row">
        <div class="col-11">
        Olá <?= $_SESSION['nome']; ?>
        </div>
        <div class=col-1>
            <a href="Login.php">Sair</a>
        </div>
    </div>

</body>
</html>