<?php 
 require_once '../classes//DAO/Conexao.class.php';//Anexar arquivo Conexão
 require_once '../classes/entidades/Dev.class.php';//Anexar o arquivo Tipo
 require_once '../classes/DAO/DevDAO.class.php';//Anexar o arquivo Tipo

 $DevDAO = new DevDAO(); //Instância do Objeto / Criar Objeto
 $Dev = new Dev(); //Instância do Objeto / Criar Objeto

 $Dev->setNomeDev('LucassR'); //Enviando uma informação
 $Dev->setEmailDev('lcardoso3@gmail.com');
 $Dev->setGithubDev('lucas_carrdoso'); 
 $Dev->setSenhaDev('12#!52');
 $Dev->setIdLang(4);   

 $DevDAO->inserir($Dev);


 echo "Testes na classe Dev<br>";
 echo "<hr>";
 echo "Acessando e recuperando dados com os métodos set e get<br>";

 echo "Acessando e recuperando dados com o método set e get<br>";
 
 echo"<strong> Nome: </strong>" . $Dev->getNomeDev() . "<br>"; //Recuperando uma informação
 echo"<strong> Email: </strong>" . $Dev->getEmailDev() . "<br>";
 echo"<strong> Github: </strong>" . $Dev->getGithubDev() . "<br>";
 echo"<strong> Senha: </strong>" . $Dev->getSenhaDev() . "<br>";
 echo"<strong> Id_linguagem: </strong>" . $Dev->getIdLang() . "<br>";
 ?>