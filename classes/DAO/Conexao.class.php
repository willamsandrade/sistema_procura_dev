<?php

     /*
      * Classe responsável pela conexão com Banco de Dados
      */

     class Conexao{
         //Usuário do Banco
         private $usuario = "root";
         //Senha do Banco
         private $senha = "";
         //Caminho do Banco
         private $caminho = "localhost";
         //Nome do Banco
         private $banco = "pw";
         //Status da conexão
         private $con;

         //Método construtor da classe
         function __construct(){
             //con receberá a conexão com o banco de dados
             $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha)
                            or die
                                ("Conexão com o banco falhou" . myslqi_error($this->con));

              //função para selecionar o banco de dados
             mysqli_select_db($this->con, $this->banco)
                or die ("Conexão com o banco de dados Falhou!" . myslqi_error($this->con));

              //Define o charset
              mysqli_set_charset($this->con, 'utf8');
         }

         //Método que retorna o status da Conexão
         public function getCon() {
               return $this->con;
         }
     }
