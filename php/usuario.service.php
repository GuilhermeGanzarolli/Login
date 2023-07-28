<?php

session_start();

class UsuarioService{

    private $conexao;
    private $usuario;

    public function __construct(Conexao $conexao, Usuario $usuario){
        $this->conexao = $conexao->conectar();
        $this->usuario = $usuario;
    }

    public function cadastrar(){
        try{ 
            $query = 'insert into usuarios(nome,email,senha,data_nascimento) values(:nome,:email,:senha,:data_nascimento)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->usuario->__get('nome'));
            $stmt->bindValue(':email', $this->usuario->__get('email'));
            $stmt->bindValue(':senha', $this->usuario->__get('senha'));
            $stmt->bindValue(':data_nascimento', $this->usuario->__get('data_nascimento'));
            $stmt->execute();
            header('Location: Login.php?cadastro=sucesso');
        }catch(Exception $e){
            header('Location: Login.php?cadastro=erro1');
        }

    }

    public function logar(){
        try{ 
            $query = 'select * from usuarios WHERE email = :email  AND senha = :senha';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':email', $this->usuario->__get('email'));
            $stmt->bindValue(':senha', $this->usuario->__get('senha'));
            $stmt->execute();
            $retorno = $stmt->rowCount();
            if($retorno>0){
                $valores = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['id_usu'] = $valores['id_usuario'];
                $_SESSION['nome'] = $valores['nome'];
                $_SESSION['email'] = $valores['email'];
                $_SESSION['data_nascimento'] = $valores['data_nascimento'];
                header('Location: ../view/pagUsu.php');
            } else{
                header('Location: Login.php?login=erro2');
            }
        }catch(Exception $e){
            header('Location: Login.php?login=erro1');
        }
    }
}

?>