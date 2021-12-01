<?php 
 require_once '../classes/DAO/Conexao.class.php';//Anexar arquivo Conexão
 require_once '../classes/entidades/Lang.class.php';//Anexar o arquivo Tipo
 require_once '../classes/DAO/LangDAO.class.php';//Anexar o arquivo Tipo

 $LangDAO = new LangDAO(); //Instância do Objeto / Criar Objeto
 $Lang = new Lang(); //Instância do Objeto / Criar Objeto

 $Lang->setDescLang('ReactJS'); //Enviando uma informação

 $LangDAO->inserir($Lang);//Teste 


 echo "Testes na classe Linguagens<br>";
 echo "<hr>";
 echo "Acessando e recuperando dados com os métodos set e get<br>";

 echo "Acessando e recuperando dados com o método set e get<br>";
 
 echo"<strong> Linguagem: </strong>" . $Lang->getDescLang() . "<br>"; //Recuperando uma informação

 ?>