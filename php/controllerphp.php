<?php

    require "../php/conexao.php";
    require "../php/usuario.php";
    require "../php/usuario.service.php";

    if(isset($_GET['acao']) && $_GET['acao']=='cadastrar'){ 

    $usuario = new Usuario();
    $usuario->__set('nome',$_POST['nome']);
    $usuario->__set('email',$_POST['email']);
    $usuario->__set('senha',$_POST['senha']);
    $usuario->__set('data_nascimento',$_POST['dataNascimento']);

    $conexao = new Conexao();

    $usuarioService = new UsuarioService($conexao, $usuario);
    
    $usuarioService->cadastrar();

    }else if(isset($_GET['acao']) && $_GET['acao']=='logar'){
        $usuario = new Usuario();
        $usuario->__set('email',$_POST['email']);
        $usuario->__set('senha',$_POST['senha']);

        $conexao = new Conexao();

        $usuarioService = new UsuarioService($conexao, $usuario);

        $usuarioService->logar();
    }
?>