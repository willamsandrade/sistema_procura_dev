<?php
//incluir classe de conexão
require_once './classes/DAO/Conexao.class.php';//Anexar arquivo Conexão
require_once './classes/entidades/Linguagens.class.php';
require_once './classes/DAO/LangDAO.class.php';


$LinguagensDAO = new LinguagensDAO(); 
$Linguagens = new Linguagens();


 $Linguagens->setLinguagem ($_POST['linguagens']);

 if ($LinguagensDAO->inserirLinguagem($Linguagens) ) { 
    $resultado = true;
}else{ 
    $resultado = false; 
}
?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    

    <style type="text/css">

   	#body{;
      background-color: #e9ecef;
   	}
   </style>
    </head>

<body id="body">

<div class="jumbotron">
  <h1 class="display-4">Cadastro finalizado!</h1>
  <p class="lead">Obrigado, você acabou de cadastrar uma nova linguagem</p>
  <hr class="my-4">
  <a class="btn btn-success btn-lg" href="index.php" role="button">Voltar para o Inicio</a>
</div>

