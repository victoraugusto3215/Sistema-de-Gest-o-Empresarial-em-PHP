<?php
require_once "conexao.php";
class cadastro
{
    //atributos
     public $usuario;
     public $nome;
     public $senha;
     public $codigo_login;

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
                                '{$this->senha}',{$this->codigo_login});";

          }catch (PDOException $msg) {
              echo "Não foi possivel relizar o cadastro: " . $msg->get;
          }

      }

    public function delete()
    {

        try {

            if (isset($_POST["excluir"])) {
                $this->codigo_login = $_POST["codigo_login"];

                $bd = new conexao();
                $comando_delete = "delete from cadastro where codigo_login = {$this->codigo_login};";
                return $bd->executeQuery($comando_delete);
            }

        } catch (PDOException $msg) {
            echo "Não foi possivel  deletar os dados do cliente: " . $msg->getMessage();
        }
    }
}