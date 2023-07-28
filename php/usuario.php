<?php

class Usuario{
    private $id_usuario;
    private $nome;
    private $email;
    private $senha;
    private $data_nascimento;
    private $ativo;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo=$valor;
    }
}

?>