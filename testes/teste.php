<?php 
 require_once '../DAO/Conexao.class.php';//Anexar arquivo Conexão
 require_once '../entidades/Linguagens.class.php';//Anexar o arquivo Tipo
 require_once '../DAO/LangDAO.class.php';//Anexar o arquivo Tipo

 $LinguagensDAO = new LinguagensDAO(); //Instância do Objeto / Criar Objeto
 $Linguagens = new Linguagens(); //Instância do Objeto / Criar Objeto

 $Linguagens->setLinguagem('ReactJS'); //Enviando uma informação

 $LinguagensDAO->inserir($Linguagens);


 echo "Testes na classe Linguagens<br>";
 echo "<hr>";
 echo "Acessando e recuperando dados com os métodos set e get<br>";

 echo "Acessando e recuperando dados com o método set e get<br>";
 
 echo"<strong> Linguagem: </strong>" . $Linguagens->getLinguagem() . "<br>"; //Recuperando uma informação

 ?>