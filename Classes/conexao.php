<?php


class conexao
{
  private $server = 'localhost';
  private $bd = 'gerenciamento_empresarial';
  private $user = 'root';
  private $password = '';
  private $conn;


  public function __construct()
  {
      try {
          $this->conn = new PDO("mysql:host={$this->server}; dbname{$this->bd}. charset=utf8",$this->user,$this-> password);

          }catch(PDOException $msg){
                 echo "Não foi possivel conectar com o banco de dados - ".$msg->getMessage();
      }
  }

  //metodo para executar os comandos (insert/update/delete)
  public function executeQuery($comando)
  {
   $stmt = $this->conn->prepare($comando);
   $stmt->execute();
   return $stmt;
  }

  //metodo para executar o comando (select)
    public function executeSelect($comando)
    {
        $stmt = $this->conn->prepare($comando);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}

