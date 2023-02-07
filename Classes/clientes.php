<?php
require_once "conexao.php";
class clientes
{
    //atributos
      public $codigo;
      public $nome;
      public $cpf;
      public $data_nascimento;
      public $endereco;
      public $numero;
      public $cidade;
      public $uf;
      public $sexo;
      public $email;
      public $telefone;

    //metodos

    public function insert(){

        try {

            if (isset($_POST["salvar"])){
               $this ->codigo = $_POST["codigo"];
               $this ->nome = $_POST["nome"];
               $this ->cpf = $_POST["cpf"];
               $this ->data_nascimento = $_POST["data_nascim"];
               $this ->endereco = $_POST["endereco"];
               $this ->numero = $_POST["numero"];
               $this ->uf = $_POST["uf"];
               $this ->sexo = $_POST["sexo"];
               $this ->email = $_POST["email"];
               $this ->telefone = $_POST["telefone"];

               $bd = new conexao();
               $comando_insert = "insert into clientes(codigo,nome,cpf,data_nascim,endereco,numero,cidade,uf,sexo,email,telefone)
                                  values({$this->codigo},'{$this->nome}','{$this->cpf}','{$this->data_nascimento}','{$this->endereco}',
                                  '{$this->numero}','{$this->uf}','{$this->sexo},'{$this->email}','{$this->telefone})";
            }
        }catch(PDOException $msg){
            echo "Não foi possivel inserir os dados do cliente: ".$msg->getMessage();
        }
    }
    
    public function delete(){

        try {

            if (isset($_POST["excluir"])){
                $this ->codigo = $_POST["codigo"];

                $bd = new conexao();
                $comando_delete = "delete from clientes where codigo = {$this->codigo};";
                                   return $bd->executeQuery($comando_delete);
            }
            
        }catch (PDOException $msg){
            echo "Não foi possivel  deletar os dados do cliente: ".$msg ->getMessage();
        }
    }
}
