<?php
//incluir classe de conexão
require_once './classes/DAO/Conexao.class.php'; //Anexar arquivo Conexão
require_once './classes/DAO/LangDAO.class.php'; //Anexar o arquivo Tipo

$LangDAO = new LangDAO();
$langs = $LangDAO->buscar();

?>

<!DOCTYPE html>
<html>

<head>
	<title>Cadastro de Devs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

<body>
	<img class="wave">
	<div class="container">
		<div>
			<img src="img/bgdev.svg" class="img-fluid">
		</div>
		<div class="login-content">

			<form action="fim-cad.php" method="POST">

				<h3 class="title">Cadastre-se</h3>
				
				
				<div class="form-group">
					<label class="label">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Ex:Lucas" required >
				</div>

				<div class="form-group">
					<label class="label">E-mail</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Ex: lucas@gmail.com" required >
				</div>


				<div class="form-group">
					<label class="label">Github</label>
					<input type="text" class="form-control" name="github" id="github" placeholder="Ex: lucas_rodrigues" required >
				</div>

				<div class="form-group">
					<label class="label">Senha</label>
					<input type="password" class="form-control" name="senha" id="senha" required >
				</div>
               
				<h3 class="title2">Qual linguagem você programa?</h3>

				<div class="form-group">
					 <select type="text" class="form-control" name="id_linguagem_utilizada" id="id_linguagem_utilizada"> 
					 <?php
						foreach ($langs as $l) {
						?>
				         <option value="<?php echo $l['id_linguagem']; ?>">
						 <?php echo $l['linguagem']; ?></option>
						<?php
						}
						?>
     				 </select>
                 </div>

					<input type="submit" class="btn" value="CADASTRAR">
					<a href="index.php">Inicio | </a>
					<a href="linguagem.php">Cadastrar Linguagem</a>
			</form>
					
		</div>

	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>