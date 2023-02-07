<?php
require_once "conexao.php";
class cadastro
{
    //atributos
    public $usuario;
    public $nome;
    public $senha;
    public $codigo;

    //metodos

    public function insert()
    {

        try {
            if (isset($_POST["salvar"])){
                $this -> usuario = $_POST["usuario"];
                $this -> nome = $_POST["nome"];
                $this -> senha = $_POST["senha"];
                $this -> codigo_login = $_POST["codigo_login"];
            }

            $bd = new conexao();
            $comando_insert ="insert into cadastro(usuario,nome,senha,codigo_login) values ({$this->usuario},'{$this->nome}',
                                '{$this->senha}',{null});";

        }catch (PDOException $msg) {
            echo "Não foi possivel relizar o login: " . $msg->get;
        }

    }


}