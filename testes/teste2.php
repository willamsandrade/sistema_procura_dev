<?php 
 require_once '../DAO/Conexao.class.php';//Anexar arquivo Conexão
 require_once '../entidades/Programador.class.php';//Anexar o arquivo Tipo
 require_once '../DAO/programadorDAO.php';//Anexar o arquivo Tipo

 $ProgramadorDAO = new ProgramadorDAO(); //Instância do Objeto / Criar Objeto
 $Programador = new Programador(); //Instância do Objeto / Criar Objeto

 $Programador->setNome('LucassR'); //Enviando uma informação
 $Programador->setEmail('lcardoso3@gmail.com');
 $Programador->setGithub('lucas_carrdoso'); 
 $Programador->setSenha('12#!52');
 $Programador->setId_linguagem_utilizada(4);   

 $ProgramadorDAO->inserirProgramador($Programador);


 echo "Testes na classe Programador<br>";
 echo "<hr>";
 echo "Acessando e recuperando dados com os métodos set e get<br>";

 echo "Acessando e recuperando dados com o método set e get<br>";
 
 echo"<strong> Nome: </strong>" . $Programador->getNome() . "<br>"; //Recuperando uma informação
 echo"<strong> Email: </strong>" . $Programador->getEmail() . "<br>";
 echo"<strong> Github: </strong>" . $Programador->getGithub() . "<br>";
 echo"<strong> Senha: </strong>" . $Programador->getSenha() . "<br>";
 echo"<strong> Id_linguagem: </strong>" . $Programador->getId_linguagem_utilizada() . "<br>";
 ?>